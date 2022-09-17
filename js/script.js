function init() {
  $(".main-carousel").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          centerMode: false,
          centerPadding: "40px",
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          centerMode: false,
          slidesToShow: 1.1,
        },
      },
    ],
  });
  $(".menu__burger").click(function () {
    $(".menu__open").fadeIn(300);
  });
  $(".menu__item").click(function () {
    $(".menu__open").fadeOut(300);
  });
  $(".menu-close").click(function () {
    $(".menu__open").fadeOut(300);
  });
}

window.onload = init;
