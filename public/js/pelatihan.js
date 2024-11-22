const menuItems = document.querySelectorAll('.Title'); // Seleksi elemen menu baru
const items = document.querySelectorAll('.item'); // Tetap sesuai dengan konten yang ada

// Tambahkan event listener pada setiap item menu
menuItems.forEach(menu => {
    menu.addEventListener('click', () => {
        // Hapus class aktif dari semua menu dan konten
        menuItems.forEach(m => m.classList.remove('active'));
        items.forEach(item => item.classList.remove('active'));

        // Tambahkan class aktif ke menu dan konten yang dipilih
        menu.classList.add('active');
        const target = menu.getAttribute('data-target');
        document.getElementById(target).classList.add('active');
    });
});
