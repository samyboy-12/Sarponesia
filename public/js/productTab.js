const tabs = document.querySelectorAll('.tabButton');
const title = document.getElementById('productTitle');
const description = document.getElementById('productDescription');
const catalogLink = document.getElementById('catalogLink');

const productData = {
  'Benih': {
    desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.",
    link: '#benih'
  },
  'Pupuk': {
    desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.",
    link: '#pupuk'
  },
  'Alat': {
    desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.",
    link: '#alat'
  },
  'Kopi': {
    desc: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.",
    link: '#kopi'
  }
};

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const category = tab.getAttribute('data-category');

    // Update title, description, and catalog link
    title.textContent = category;
    description.textContent = productData[category].desc;
    catalogLink.href = productData[category].link;

    // Update active class
    tabs.forEach(t => t.classList.remove('active', 'activeTab')); // hapus semua active
    tab.classList.add('active', 'activeTab'); // tambahkan active di tab yang diklik
  });
});
