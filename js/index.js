const $ = jQuery;
$.noConflict();

$(document).ready(function () {
  $('.c-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    prevArrow:
      '<i class="c-slider__arrow fas fa-chevron-left slick-prev slick-arrow"></i>',
    nextArrow:
      '<i class="c-slider__arrow fas fa-chevron-right slick-next slick-arrow"></i>',
  });
});
