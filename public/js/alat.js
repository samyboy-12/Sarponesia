
  const menuItems = document.querySelectorAll('.EquipmentTitle');
  const items = document.querySelectorAll('.item');

  // Tambahkan event listener pada setiap item menu
  menuItems.forEach(item => {
      item.addEventListener('click', () => {
          // Hapus class aktif dari semua menu dan konten
          menuItems.forEach(menu => menu.classList.remove('active'));
          items.forEach(item => item.classList.remove('active'));

          // Tambahkan class aktif ke menu dan konten yang dipilih
          item.classList.add('active');
          const target = item.getAttribute('data-target');
          document.getElementById(target).classList.add('active');
      });
  });