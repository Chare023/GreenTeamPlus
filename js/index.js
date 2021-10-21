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
  const documentElement = $('html')[0];

  $('#header-menu').click(function () {
    main.classList.add('hide');
    documentElement.classList.add('header-is-open');
  });

  $('#toggle-header-menu').click(function () {
    main.classList.remove('hide');
    documentElement.classList.remove('header-is-open');
  });

  $('.l-nav__list-item').click(function () {
    main.classList.remove('hide');
    documentElement.classList.remove('header-is-open');
  });

  $('.c-link').click(function () {
    main.classList.remove('hide');
    documentElement.classList.remove('header-is-open');
  });


  $('.gallery-icon').click(function() {
		var dir = $(this).find('img').attr("src");
    console.log(dir);
		$('#img-wrap').hide();
		$('#img-wrap').fadeIn('fast');
		$('#img-wrap').find('img').attr("src",dir);
	});

});
