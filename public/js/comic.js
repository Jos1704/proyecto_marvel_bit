/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/comic.js ***!
  \*******************************/
var Inventario = function () {
  var initHandle = function initHandle() {
    $(document).on('click', '.personaje-datos', function (e) {
      e.preventDefault();
      var url = $(this).attr('data-url');
      var data = {
        'url': url
      };
      $.ajax({
        url: '/comic-personaje',
        type: 'GET',
        data: data,
        dataType: 'json',
        success: function success(data) {
          console.log(data);
          $.each(data, function (key, value) {
            $('.data-personaje').html('<img src="' + value.thumbnail.path + '/portrait_uncanny.' + value.thumbnail.extension + '>' + '<br>' + 'Nombre: ' + value.name + '<br>');
          });
        }
      });
    });
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