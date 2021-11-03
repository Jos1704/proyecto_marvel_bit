/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/inventario.js ***!
  \************************************/
var Inventario = function () {
  var initHandle = function initHandle() {
    var modal = document.querySelector('.main-modal');
    var closeButton = document.querySelectorAll('.modal-close');

    var modalClose = function modalClose() {
      modal.classList.remove('fadeIn');
      modal.classList.add('fadeOut');
      setTimeout(function () {
        modal.style.display = 'none';
      }, 500);
    };

    var openModal = function openModal() {
      modal.classList.remove('fadeOut');
      modal.classList.add('fadeIn');
      modal.style.display = 'flex';
    };

    for (var i = 0; i < closeButton.length; i++) {
      var elements = closeButton[i];

      elements.onclick = function (e) {
        return modalClose();
      };

      modal.style.display = 'none';

      window.onclick = function (event) {
        if (event.target == modal) modalClose();
      };
    }
  };

  return {
    init: function init() {
      initHandle();
    }
  };
}();

jQuery(document).ready(function () {
  Inventario.init();
});
/******/ })()
;