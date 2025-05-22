document.addEventListener('DOMContentLoaded', function () {
    axios.get('/api/products')
      .then(function (response) {
        const benihContainer = document.getElementById('benih-products');
        const pupukContainer = document.getElementById('pupuk-products');
        const alatContainer = document.getElementById('alat-products');
        const kopiContainer = document.getElementById('kopi-products');
  
        const products = response.data.data;
  
        const categories = {
          1: kopiContainer,
          2: benihContainer,
          3: pupukContainer,
          4: alatContainer
        };
  
        products.forEach(product => {
          const container = categories[product.Category_ID];
          if (container) {
            const item = document.createElement('div');
            item.className = 'item';
            item.innerHTML = `
              <div class="cardContent">
                <div class="overlay"></div>
                <div class="productDetails">
                  <img class="productImg" src="${product.Image_path}" alt="${product.Name}" />
                  <div class="buyButton" onclick="window.open('${product.Link_tokped}', '_blank')">Beli</div>
                  <p class="productName">${product.Name}</p>
                  <div class="ratingWrapper">
                    <img class="starIcon" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="star" />
                    <img class="starIcon" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="star" />
                    <img class="starIcon" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="star" />
                    <img class="starIcon" src="/assets/1f0e7cdf57ecffa33f58c858deafbd9f.svg" alt="star" />
                    <img class="starIcon" src="/assets/5c6886f8f2599e896d4777377710adb0.svg" alt="star" />
                  </div>
                </div>
                <p class="priceTag">${new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(product.Price)}</p>
              </div>
            `;
            container.appendChild(item);
          }
        });
      })
      .catch(function (error) {
        console.error('Error fetching data: ', error);
      });
  });
  