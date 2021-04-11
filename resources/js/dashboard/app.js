
// for expanding side navigation menu bar

const menu = (toggleId, navbarId, bodyId) =>{
    const toggle = document.getElementById(toggleId),
        navbar = document.getElementById(navbarId),
        bodypadding = document.getElementById(bodyId)

    if (toggle && navbar) {
        toggle.addEventListener('click', () => {
            navbar.classList.toggle('stretch')

            bodypadding.classList.toggle('bodyId')
        })
    }


}
menu('toggleId', 'navbar','bodyId')


// Current NavBar
const linkColor = document.querySelectorAll('.nav__link')

function colorLink() {
    linkColor.forEach(l => l.classList.remove('active'))
    this.classList.add('active')
}
linkColor.forEach(l => l.addEventListener('click', colorLink))




