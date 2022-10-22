$.noConflict();
jQuery(document).ready(function ($) {
  $(".carousel__item").slick({
    infinite: false,
    pauseOnHover: false,
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
  });
});

jQuery("a.header__navigation-link").on("click", function (event) {
  event.preventDefault();
  let id = jQuery(this).attr("href"),
    top = jQuery(id).offset().top;
  jQuery("body,html").animate({ scrollTop: top }, 500);
});
