jQuery(document).ready(function($) {
  $(".slick__slider").slick({
    infinite: true,
    arrows: false,
    autoplay: true,
    slidesToShow: 1,
    adaptiveHeight: true,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 572,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  $(".three-col__slider").slick({
    arrows: false,
    mobileFirst: true,
    slidesToShow: 1.1,
    slidesToScroll: 1,
    infinite: true,
    responsive: [
      {
        breakpoint: 572,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
});
