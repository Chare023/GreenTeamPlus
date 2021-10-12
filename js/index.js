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

  const main = $('#main-ctn')[0];
  const headerWraper = $('#header')[0];

  $('#header-menu').click(function() {

    main.classList.add("hide");
    headerWraper.classList.add("is-open"); 
  });

  $('#toggle-header-menu').click(function() {
 
    main.classList.remove("hide");
    headerWraper.classList.remove("is-open"); 
   });

   $('.l-nav__list-item').click(function() {
 
    main.classList.remove("hide");
    headerWraper.classList.remove("is-open"); 
   });

   $('.c-link').click(function() {
 
    main.classList.remove("hide");
    headerWraper.classList.remove("is-open"); 
   });
});
