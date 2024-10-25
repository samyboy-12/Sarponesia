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

        if(contentTop < triggerBottom) {
            content.classList.add('show')
        } else {
            content.classList.remove('show')
        }
    })
}