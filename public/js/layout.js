const MainApp = (function () {
    // Cache DOM elements
    const elements = {
        search: document.querySelector('.search'),
        searchBtn: document.querySelector('.btn'),
        searchInput: document.querySelector('.input'),
        nav: document.querySelector('nav'),
        contents: document.querySelectorAll('.content'),
        menuIcon: document.getElementById('menu-icon'),
        dropdown: document.querySelector('.dropdown'),
        headerRight: document.getElementById('header-right'),
        tabs: document.querySelectorAll('.tab')
    };

    // Debounce utility for scroll events
    function debounce(func, wait) {
        let timeout;
        return function (...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    }

    // Initialize search functionality
    function initSearch() {
        if (!elements.search || !elements.searchBtn || !elements.searchInput) {
            console.warn('Search elements not found');
            return;
        }

        elements.searchBtn.addEventListener('click', () => {
            elements.search.classList.toggle('active');
            elements.searchInput.focus();
        });
    }

    // Initialize fixed navigation
    function initFixedNav() {
        if (!elements.nav) {
            console.warn('Navigation element not found');
            return;
        }

        const fixNav = () => {
            const threshold = elements.nav.offsetHeight + 100;
            elements.nav.classList.toggle('active', window.scrollY > threshold);
        };

        window.addEventListener('scroll', debounce(fixNav, 10));
    }

    // Initialize content visibility on scroll
    function initContentVisibility() {
        if (!elements.contents.length) {
            console.warn('No content elements found');
            return;
        }

        const checkContents = () => {
            const triggerBottom = window.innerHeight * 0.8; // 80% of viewport height

            elements.contents.forEach(content => {
                const contentTop = content.getBoundingClientRect().top;
                content.classList.toggle('show', contentTop < triggerBottom);
            });
        };

        window.addEventListener('scroll', debounce(checkContents, 10));
        checkContents(); // Initial check
    }

    // Smooth scroll to top
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Initialize tab functionality
    function initTabs() {
        if (!elements.tabs.length) {
            console.warn('No tab elements found');
            return;
        }

        elements.tabs.forEach(tab => {
            const links = tab.querySelectorAll('a');
            if (!links.length) return;

            let activeLink = links[0];
            let activeContent = document.querySelector(links[0].hash);

            // Set initial active tab
            const hashLink = links.find(link => link.hash === location.hash);
            if (hashLink) {
                activeLink = hashLink;
                activeContent = document.querySelector(hashLink.hash);
            }

            activeLink.classList.add('active');
            if (activeContent) activeContent.style.display = 'block';

            // Hide other contents
            links.forEach(link => {
                if (link !== activeLink) {
                    const content = document.querySelector(link.hash);
                    if (content) content.style.display = 'none';
                }
            });

            // Handle tab clicks
            tab.addEventListener('click', e => {
                const link = e.target.closest('a');
                if (!link) return;

                e.preventDefault();
                activeLink.classList.remove('active');
                if (activeContent) activeContent.style.display = 'none';

                activeLink = link;
                activeContent = document.querySelector(link.hash);

                activeLink.classList.add('active');
                if (activeContent) activeContent.style.display = 'block';
            });
        });
    }

    // Initialize mobile menu toggle
    function initMobileMenu() {
        if (!elements.menuIcon || !elements.dropdown) {
            console.warn('Menu icon or dropdown not found');
            return;
        }

        elements.menuIcon.addEventListener('click', () => {
            elements.menuIcon.classList.toggle('menu-open');
            elements.dropdown.style.display = elements.dropdown.style.display === 'block' ? 'none' : 'block';
        });
    }

    // Authentication handling
    function updateHeader() {
        const token = localStorage.getItem('token');
        const headerRight = elements.headerRight;

        if (!headerRight) {
            console.warn('Header right element not found');
            return;
        }

        if (!token) {
            headerRight.innerHTML = '<a class="login-btn" href="/login">Login</a>';
            return;
        }

        // Fetch CSRF cookie for Sanctum
        axios.get('/sanctum/csrf-cookie').then(() => {
            axios.get('/api/me', {
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Accept': 'application/json'
                }
            }).then(response => {
                if (response.data.status === 'success') {
                    const user = response.data.data;
                    let headerContent = '';
                    if (user.role === 'admin') {
                        headerContent += `<a class="login-btn" href="/manajemen-produk">Manage</a>`;
                    }
                    headerContent += `<button class="login-btn" onclick="MainApp.logout()">Logout</button>`;
                    headerRight.innerHTML = headerContent;
                }
            }).catch(error => {
                console.error('Error fetching user:', error.response);
                localStorage.removeItem('token');
                headerRight.innerHTML = '<a class="login-btn" href="/login">Login</a>';
            });
        }).catch(error => {
            console.error('Error fetching CSRF cookie:', error);
        });
    }

    function logout() {
    const token = localStorage.getItem('token');
    if (!token) {
        window.location.href = '/home';
        return;
    }

    axios.get('/sanctum/csrf-cookie').then(() => {
        axios.post('/api/logout', {}, {
            headers: {
                'Authorization': `Bearer ${token}`,
                'Accept': 'application/json'
            }
        }).then(() => {
            localStorage.removeItem('token');
            window.location.href = '/home'; // ⬅️ UBAH DI SINI
        }).catch(error => {
            console.error('Logout error:', error.response);
            alert(error.response?.data?.message || 'Failed to logout. Please try again.');
        });
    }).catch(error => {
        console.error('Error fetching CSRF cookie:', error);
        alert('Error initializing logout. Please try again.');
    });
}

    // Initialize all features
    function init() {
        initSearch();
        initFixedNav();
        initContentVisibility();
        initTabs();
        initMobileMenu();
        updateHeader();
    }

    // Expose public methods
    return {
        init,
        scrollToTop,
        logout
    };
})();

// Run initialization
document.addEventListener('DOMContentLoaded', MainApp.init);