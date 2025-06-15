const reviewList = document.getElementById('reviewList');

async function fetchReviews() {
    try {
        // Extract the product ID from the URL
        const urlParams = new URLSearchParams(window.location.search);
        const productId = urlParams.get('id'); // Gets the value of 'id' from the URL

        if (!productId) {
            reviewList.innerHTML = '<p class="error">ID produk tidak ditemukan di URL.</p>';
            return;
        }

        // Update the API URL to include the product ID
        const response = await axios.get(`http://127.0.0.1:8000/api/reviews?product_id=${productId}`);
        const reviews = response.data.data;

        if (reviews.length === 0) {
            reviewList.innerHTML = '<p class="noReviews">Belum ada ulasan untuk produk ini.</p>';
            return;
        }

        reviewList.innerHTML = '';
        reviews.forEach(review => {
            const reviewCard = document.createElement('div');
            reviewCard.className = 'reviewCard';

            const stars = generateStarRating(review.rating);
            const reviewDate = formatDate(review.created_at);

            reviewCard.innerHTML = `
                <div class="reviewerDetails">
                    <div class="reviewerInfoContainer">
                        <img class="reviewerProfilePic" src="/assets/Detail/147c327cd193992ce14e35764386d665.png" alt="Profile Picture" />
                        <div class="reviewerNameAndDate">
                            <div class="reviewerName">${review.user.name}</div>
                            <p class="reviewDate">${reviewDate}</p>
                        </div>
                        <div class="reviewRating">
                            ${stars}
                        </div>
                    </div>
                    <p class="reviewText">${review.comment}</p>
                </div>
            `;

            reviewList.appendChild(reviewCard);
        });
    } catch (error) {
        console.error('Error fetching reviews:', error);
        reviewList.innerHTML = '<p class="error">Gagal memuat ulasan. Silakan coba lagi nanti.</p>';
    }
}

function generateStarRating(rating) {
    let stars = '';
    for (let i = 1; i <= 5; i++) {
        const starIcon = i <= rating 
            ? '/assets/Detail/e147678a63387267bb7f1849487982b7.svg' 
            : '/assets/Detail/85058453a5b83552d6953d50883f2748.svg';
        stars += `<img class="ratingStar" src="${starIcon}" alt="Star" />`;
    }
    return stars;
}

function formatDate(dateString) {
    const date = new Date(dateString);
    const now = new Date();
    const diffTime = Math.abs(now - date);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

    if (diffDays < 1) return 'Hari ini';
    if (diffDays === 1) return 'Kemarin';
    return `${diffDays} hari lalu`;
}

document.addEventListener('DOMContentLoaded', fetchReviews);




document.addEventListener('DOMContentLoaded', function() {
    // Function to fetch reviews from the API
    async function fetchReviews() {
        try {
            const response = await axios.get('{{base_url}}/reviews');
            if (response.data.status === 'success') {
                displayReviews(response.data.data);
            } else {
                console.error('Failed to fetch reviews:', response.data.message);
                document.getElementById('reviewContent').innerHTML = '<p>Error loading reviews.</p>';
            }
        } catch (error) {
            console.error('Error fetching reviews:', error);
            document.getElementById('reviewContent').innerHTML = '<p>Error loading reviews.</p>';
        }
    }

    // Function to display reviews in the reviewContent div
    function displayReviews(reviews) {
        const reviewContainer = document.getElementById('reviewContent');
        reviewContainer.innerHTML = ''; // Clear existing content

        reviews.forEach(review => {
            const reviewElement = document.createElement('div');
            reviewElement.classList.add('reviewItem');
            
            // Create star rating display
            const ratingStars = '★'.repeat(review.rating) + '☆'.repeat(5 - review.rating);
            
            // Format the created date
            const createdDate = new Date(review.created_at).toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });

            reviewElement.innerHTML = `
                <div class="reviewHeader">
                    <span class="reviewerName">${review.user.name}</span>
                    <span class="reviewDate">${createdDate}</span>
                </div>
                <div class="reviewRating">${ratingStars}</div>
                <div class="reviewComment">${review.comment}</div>
                <div class="reviewProduct">
                    <span>Product: ${review.product.Name}</span>
                </div>
            `;
            
            reviewContainer.appendChild(reviewElement);
        });
    }

    // Call the fetch function when the page loads
    fetchReviews();
});

document.addEventListener('DOMContentLoaded', function () {
    // Get the "Lainnya" link for reviews
    const moreReviewsLink = document.querySelector('.moreReviews');

    // Function to get product ID from URL or data attribute
    function getProductId() {
        // Example: Get product ID from URL query parameter (e.g., ?productId=123)
        const urlParams = new URLSearchParams(window.location.search);
        let productId = urlParams.get('productId');

        // Fallback: If no productId in URL, try getting from a data attribute
        if (!productId) {
            const productContainer = document.querySelector('.productInfoContainer');
            productId = productContainer ? productContainer.dataset.productId : null;
        }

        return productId;
    }

    // Handle click on "Lainnya" link
    if (moreReviewsLink) {
        moreReviewsLink.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default link behavior

            const productId = getProductId();
            if (productId) {
                // Redirect to review page with productId as query parameter
                // Assuming the route 'pembelian/review' accepts a productId parameter
                window.location.href = `/review?productId=${productId}`;
            } else {
                console.error('Product ID not found');
                // Optionally, redirect to a generic review page or show an error
                window.location.href = '/review';
            }
        });
    }
});