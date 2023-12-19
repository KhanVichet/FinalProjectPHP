$(function () {
  $(".slider").slick({
    centerMode: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 3,
    arrows: false,
    centerMode: true,
    centerPadding: "40px",
    // responsive: [{
    //         breakpoint: 768,
    //         settings: {
    //             arrows: false,
    //             centerMode: true,
    //             centerPadding: '50px',
    //             slidesToShow: 3
    //         }
    //     },
    //     {
    //         breakpoint: 480,
    //         settings: {
    //             arrows: false,
    //             centerMode: true,
    //             centerPadding: '50px',
    //             slidesToShow: 1
    //         }
    //     }
    // ]
  });
});
