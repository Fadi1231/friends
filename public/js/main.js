//Variables
const mainRoot = document.querySelector('#root')
const links = document.querySelectorAll('[data-link]')
const blockTitles = document.querySelectorAll('.block-title')

//Functions
const App = {
    animate: {
        show: element => {
            element.style.display = ''
        },
        hide: element => {
            element.style.cssText = 'display: none;'
        },
        toggle: element => {
            element.style.display !== 'none' ?
                App.animate.hide(element) :
                App.animate.show(element)
        }
    }
}

/**
 * Loop through all links and add a click event listener to them
 */
for (let link of links) {
    link.addEventListener('click', () => {
        mainRoot.innerHTML = `The link [${link.dataset.link}] has been clicked`
    })
}

/**
 * Making the title bars clickable
 * and once clicked they hide the content beneath them
 */
for (let title of blockTitles) {
    title.addEventListener('click', () => {
        App.animate.toggle(title.nextElementSibling)
    })
}