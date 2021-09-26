const $ = jQuery;
$.noConflict();

$(document).ready(function () {
  $('.c-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
  });
});
