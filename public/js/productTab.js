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


document.addEventListener("DOMContentLoaded", function () {
  fetch("/api/services")
    .then((response) => response.json())
    .then((res) => {
      if (res.status === "success") {
        const services = res.data;

        const gardenContainer = document.getElementById("gardenServicesContainer");
        const trainingContainer = document.getElementById("trainingServicesContainer");

        services.forEach(service => {
          const { Name, Description, Image_path, Category_ID } = service;

          if (Category_ID === 5) {
            // Garden Services
            const item = document.createElement("div");
            item.className = "serviceBlock";
            item.innerHTML = `
            <div class="serviceItem">
              <img class="colorIndicator" src="/${Image_path}" alt="${Name}" />
              <p class="serviceName">${Name}</p>
            </div>
          `;
            gardenContainer.appendChild(item);
          }
          else if (Category_ID === 6) {
            // Training Services
            const card = document.createElement("div");
            card.className = "trainingCard";
            card.innerHTML = `
              <img class="trainingImage" src="/${Image_path}" alt="${Name}" />
              <div class="trainingDetails">
                <p class="trainingTitle">${Name}</p>
                <article class="trainingDesc">${Description}</article>
              </div>
            `;
            trainingContainer.appendChild(card);
          }
        });
      } else {
        console.error("Gagal memuat data layanan.");
      }
    })
    .catch((error) => {
      console.error("Terjadi kesalahan:", error);
    });
});

