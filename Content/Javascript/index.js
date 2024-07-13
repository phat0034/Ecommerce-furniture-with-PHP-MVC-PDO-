var hover_sale = document.querySelector('.hover_sale')
var dropdown_menu_sale = document.querySelector('.dropdown_menu_sale')
var body = document.querySelector('.body')
var dropdownmenu = document.getElementById('dropdown-menu')
var images = document.querySelectorAll('.slideshow img')

window.addEventListener('scroll', function () {
  var scrollY = window.scrollY
  var nav_sticky = this.document.getElementById('nav_sticky')
  if (scrollY > 30) {
    nav_sticky.classList.add('sticky_header')
  } else {
    nav_sticky.classList.remove('sticky_header')
  }
})
var signup_link = this.document.getElementById('signup_link')
var signin_link = this.document.getElementById('signin_link')
var login = this.document.getElementById('login')
var closeform = document.querySelector('.closeform')
var loginform_btn = document.getElementById('loginform_btn')
var loginform_popup = document.getElementById('loginform_popup')
var login_popup = document.getElementsByClassName('login_popup')
signup_link.addEventListener('click', function () {
  loginform_popup.classList.add('active_signup')
})
signin_link.addEventListener('click', function () {
  loginform_popup.classList.remove('active_signup')
})
loginform_btn.addEventListener('click', function () {
  if (login.style.display === 'none') {
    login.style.display = 'block'
  } else {
    login.style.display = 'none'
  }
})

closeform.addEventListener('click', function () {
  login.style.display = 'none'
})

// login_popup.addEventListener('click', function () {
//   login_popup.classList.add('active')
// })
