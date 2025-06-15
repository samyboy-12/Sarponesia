const search = document.querySelector('.search')
const btn = document.querySelector('.btn')
const input = document.querySelector('.input')

btn.addEventListener('click', () => {
    search.classList.toggle('active')
    input.focus()
})

const nav = document.querySelector('nav');
window.addEventListener('scroll', fixNav);

function fixNav() {
    if (window.scrollY > nav.offsetHeight + 100) {
        nav.classList.add('active');
    } else {
        nav.classList.remove('active');
    }
}

const contents = document.querySelectorAll('.content')

window.addEventListener('scroll', checkContents)

checkContents()

function checkContents() {
    const triggerBottom = window.innerHeight / 5 * 4

    contents.forEach(content => {
        const contentTop = content.getBoundingClientRect().top

        if (contentTop < triggerBottom) {
            content.classList.add('show')
        } else {
            content.classList.remove('show')
        }
    })
}

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Membuat scroll menjadi halus
    });
}




$(function () {
    $('.tab').each(function () {
        var $active, $content, $links = $(this).find('a');

        $active = $($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
        $active.addClass('active');

        $content = $($active[0].hash);

        $links.not($active).each(function () {
            $(this.hash).hide();
        });

        $(this).on('click', 'a', function (e) {
            $active.removeClass('active');
            $content.hide();

            $active = $(this);
            $content = $(this.hash);

            $active.addClass('active');
            $content.show();

            e.preventDefault();
        });
    });
});


function toggleMenu() {
    const menuIcon = document.getElementById('menu-icon');
    const dropdown = document.querySelector('.dropdown');

    // Toggle the 'menu-open' class for the hamburger icon
    menuIcon.classList.toggle('menu-open');

    // Toggle the 'active' class for the dropdown
    if (dropdown.style.display === 'none' || dropdown.style.display === '') {
        dropdown.style.display = 'block'; // Tampilkan elemen
    } else {
        dropdown.style.display = 'none'; // Sembunyikan elemen
    }
}

function updateHeader() {
            const token = localStorage.getItem('token');
            const $headerRight = $('#header-right');

            if (!token) {
                // Guest user
                $headerRight.html('<a class="login-btn" href="/login">Login</a>');
                return;
            }

            // Fetch user details from /api/me
            $.ajax({
                url: '/api/me',
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + token,
                    'Accept': 'application/json'
                },
                success: function(data) {
                    const user = data.user;
                    let headerContent = '';
                    if (user.role === 'admin') {
                        headerContent += `<a class="login-btn" href="/manajemen-produk">Manage</a>`;
                    }
                    headerContent += `<button class="login-btn" onclick="logout()">Logout</button>`;
                    $headerRight.html(headerContent);
                },
                error: function() {
                    // Invalid or expired token, treat as guest
                    localStorage.removeItem('token');
                    $headerRight.html('<a class="login-btn" href="/login">Login</a>');
                }
            });
        }

        function logout() {
            const token = localStorage.getItem('token');
            if (!token) {
                window.location.href = '/login';
                return;
            }

            $.ajax({
                url: '/api/logout',
                method: 'POST',
                headers: {
                    'Authorization': 'Bearer ' + token,
                    'Accept': 'application/json'
                },
                success: function() {
                    localStorage.removeItem('token');
                    window.location.href = '/login';
                },
                error: function(jqXHR) {
                    alert(jqXHR.responseJSON?.error || 'Failed to logout. Please try again.');
                }
            });
        }

        // Run on page load
        $(document).ready(function() {
            updateHeader();
        });