// fixed navbar
// const navbar = document.getElementById('nav');

// window.addEventListener('scroll', function () {
//   const scrollHeight = window.pageYOffset;
//   const navHeight = navbar.getBoundingClientRect().height;
//   if (scrollHeight > navHeight) {
//     navbar.classList.add('fixed-nav');
//   } else {
//     navbar.classList.remove('fixed-nav');
//   }
// });

// hamburger menu
const hamBurger = document.querySelector('.hamburger-icon');
const navList = document.querySelector('.hamburger-nav');

function navBurger() {
  hamBurger.classList.toggle('active');
  navList.classList.toggle('show');
}

hamBurger.addEventListener('click', navBurger);
