const CartApp = (function () {
    // Cache DOM elements
    const elements = {
        cartItems: document.getElementById('cartItems'),
        selectedCount: document.getElementById('selectedCount'),
        removeSelected: document.getElementById('removeSelected'),
        totalItems: document.getElementById('totalItems'),
        subtotal: document.getElementById('subtotal'),
        checkoutButton: document.getElementById('checkoutButton')
    };

    let cartData = [];

    // Format currency
    function formatCurrency(amount) {
        return `Rp ${amount.toLocaleString('id-ID')}`;
    }

    // Fetch cart data
    async function fetchCart() {
        const token = localStorage.getItem('token');
        if (!token) {
            window.location.href = '/login';
            return;
        }

        try {
            await axios.get('/sanctum/csrf-cookie');
            const response = await axios.get('/api/cart', {
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Accept': 'application/json'
                }
            });

            if (response.data.status === 'success') {
                cartData = response.data.data;
                renderCart();
                updateSummary();
            } else {
                console.error('Error fetching cart:', response.data.message);
                elements.cartItems.innerHTML = '<p>Keranjang kosong atau error.</p>';
            }
        } catch (error) {
            console.error('Fetch cart error:', error.response);
            elements.cartItems.innerHTML = '<p>Error memuat keranjang. Silakan coba lagi.</p>';
            if (error.response?.status === 401) {
                localStorage.removeItem('token');
                window.location.href = '/login';
            }
        }
    }

    // Render cart items
    function renderCart() {
        if (!cartData.length) {
            elements.cartItems.innerHTML = '<p>Keranjang kosong.</p>';
            elements.checkoutButton.disabled = true;
            return;
        }

        elements.cartItems.innerHTML = cartData.map(item => `
            <div class="productCard" data-id="${item.id}">
                <div class="productImageContainer">
                    <input type="checkbox" class="selectItem" data-id="${item.id}">
                    <img class="productImage" src="${item.product.image || '/assets/Cart/coffee_packaging.png'}" alt="${item.product.name || 'Product'}" />
                    <div class="productInfoContainer">
                        <div class="productName">${item.product.name || 'Unknown Product'}</div>
                        <div class="productWeight">${item.product.weight || 'N/A'}</div>
                    </div>
                    <div class="availabilityPriceContainer">
                        <div class="stockPriceSection">
                            <div class="stockInfoBox_box">
                                <span class="stockInfoBox">
                                    <span class="stockInfoBox_span0">Stok </span>
                                    <span class="stockInfoBox_span1">${item.product.stock || 0}</span>
                                </span>
                            </div>
                            <div class="productPrice">${formatCurrency(item.product.price || 0)}</div>
                        </div>
                        <div class="quantitySelector">
                            <div class="quantityControl">
                                <div class="quantityControlContainer">
                                    <button class="decrementButton" data-id="${item.id}">-</button>
                                    <div class="quantityDisplay">${item.quantity}</div>
                                    <button class="incrementButton" data-id="${item.id}">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `).join('');

        // Add event listeners
        document.querySelectorAll('.incrementButton').forEach(button => {
            button.addEventListener('click', () => updateQuantity(button.dataset.id, 1));
        });
        document.querySelectorAll('.decrementButton').forEach(button => {
            button.addEventListener('click', () => updateQuantity(button.dataset.id, -1));
        });
        document.querySelectorAll('.selectItem').forEach(checkbox => {
            checkbox.addEventListener('change', updateSelectedCount);
        });
        elements.removeSelected.addEventListener('click', removeSelectedItems);
        elements.checkoutButton.addEventListener('click', proceedToCheckout);
    }

    // Update quantity
    async function updateQuantity(cartId, change) {
        const item = cartData.find(item => item.id == cartId);
        if (!item) return;

        const newQuantity = item.quantity + change;
        if (newQuantity < 1 || newQuantity > item.product.stock) return;

        try {
            await axios.get('/sanctum/csrf-cookie');
            await axios.put(`/api/cart/${cartId}`, { quantity: newQuantity }, {
                headers: {
                    'Authorization': `Bearer ${localStorage.getItem('token')}`,
                    'Accept': 'application/json'
                }
            });
            item.quantity = newQuantity;
            renderCart();
            updateSummary();
        } catch (error) {
            console.error('Update quantity error:', error.response);
            alert('Gagal memperbarui jumlah. Silakan coba lagi.');
        }
    }

    // Update selected count
    function updateSelectedCount() {
        const selected = document.querySelectorAll('.selectItem:checked').length;
        elements.selectedCount.textContent = selected;
    }

    // Remove selected items
    async function removeSelectedItems() {
        const selectedIds = Array.from(document.querySelectorAll('.selectItem:checked')).map(cb => cb.dataset.id);
        if (!selectedIds.length) return;

        try {
            await axios.get('/sanctum/csrf-cookie');
            await Promise.all(selectedIds.map(id => 
                axios.delete(`/api/cart/${id}`, {
                    headers: {
                        'Authorization': `Bearer ${localStorage.getItem('token')}`,
                        'Accept': 'application/json'
                    }
                })
            ));
            cartData = cartData.filter(item => !selectedIds.includes(item.id.toString()));
            renderCart();
            updateSummary();
        } catch (error) {
            console.error('Remove items error:', error.response);
            alert('Gagal menghapus item. Silakan coba lagi.');
        }
    }

    // Update summary
    function updateSummary() {
        const totalItems = cartData.reduce((sum, item) => sum + item.quantity, 0);
        const subtotal = cartData.reduce((sum, item) => sum + (item.quantity * (item.product.price || 0)), 0);

        elements.totalItems.textContent = totalItems;
        elements.subtotal.textContent = formatCurrency(subtotal);
        elements.checkoutButton.disabled = totalItems === 0;
    }

    // Proceed to checkout
    function proceedToCheckout() {
        if (cartData.length) {
            window.location.href = '/order';
        }
    }

    // Initialize
    function init() {
        console.log('Initializing CartApp');
        fetchCart();
    }

    return {
        init
    };
})();

document.addEventListener('DOMContentLoaded', CartApp.init);