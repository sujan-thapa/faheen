/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/dashboard/app.js ***!
  \***************************************/
// for expanding side navigation menu bar
var menu = function menu(toggleId, navbarId, bodyId) {
  var toggle = document.getElementById(toggleId),
      navbar = document.getElementById(navbarId),
      bodypadding = document.getElementById(bodyId);

  if (toggle && navbar) {
    toggle.addEventListener('click', function () {
      navbar.classList.toggle('stretch');
      bodypadding.classList.toggle('bodyId');
    });
  }
};

menu('toggleId', 'navbar', 'bodyId'); // Current NavBar

var linkColor = document.querySelectorAll('.nav__link');

function colorLink() {
  linkColor.forEach(function (l) {
    return l.classList.remove('active');
  });
  this.classList.add('active');
}

linkColor.forEach(function (l) {
  return l.addEventListener('click', colorLink);
});
/******/ })()
;