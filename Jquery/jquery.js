$(document).ready(function () {
  jQuery(document).ready(function ($) {
    var i = true;
    $(".slider-img").hover(function () {
      if (!i) {
        $(".slider-img").removeClass("active");
      } else {
        $(this).addClass("active");
      }
      i = !i;
    });
  });

  var data_slider = [
    {
      image: "1.webp",
      title: "Mike",
      des: "web3 Developer",
    },
    {
      image: "2.webp",
      title: "Mike",
      des: "web3 Developer",
    },
    {
      image: "3.webp",
      title: "Mike",
      des: "web3 Developer",
    },
    {
      image: "4.webp",
      title: "Mike",
      des: "web3 Developer",
    },
    {
      image: "1.webp",
      title: "Mike",
      des: "web3 Developer",
    },
    {
      image: "2.webp",
      title: "Mike",
      des: "web3 Developer",
    },
    {
      image: "3.webp",
      title: "Mike",
      des: "web3 Developer",
    },
  ];

  // function getSlider() {
  //   data_slider.map((slider) => {
  //     const data_slider = `
  //         <div class="slider-img">
  //           <img src="../Image/${slider.image}" alt="1" />
  //           <h1>${slider.title}</h1>
  //           <div class="details">
  //             <h2>${slider.title}</h2>
  //             <p>${slider.des}</p>
  //           </div>
  //         </div>
  //     `;
  //     $(".slider-images").append(data_slider);
  //   });
  // }
  // getSlider();

  //login
  var i = true;
  $(".register-link").click(function () {
    $(".wrapper").css("height", "520px");
    $(".login").css("transform", "translateX(-400px)");
    $(".register").css("transform", "translateX(0px)");
  });
  $(".login-link").click(function () {
    $(".wrapper").css("height", "440px");
    $(".login").css("transform", "translateX(0px)");
    $(".register").css("transform", "translateX(500px)");
  });

  $(".fa-user").click(function () {
    if (i) {
      $(".wrapper").show(200);
    } else {
      $(".wrapper").hide(200);
    }
    i = !i;
  });
  $(".close-login").click(function () {
    $(".wrapper").hide(200);
  });

  // slider for detail hotel

  let slider = $(".sliderforhotel .list");
  let items = $(".sliderforhotel .list .item");
  let next = $("#next");
  let prev = $("#prev");
  let dots = $(".sliderforhotel .dots li");

  let lengthItems = items.length - 1;
  let active = 0;

  next.on("click", function () {
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
  });

  prev.on("click", function () {
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
  });

  let refreshInterval = setInterval(() => {
    next.trigger("click");
  }, 3000);

  function reloadSlider() {
    slider.css("left", -items[active].offsetLeft + "px");

    let lastActiveDot = $(".sliderforhotel .dots li.active");
    lastActiveDot.removeClass("active");
    dots.eq(active).addClass("active");

    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
      next.trigger("click");
    }, 3000);
  }

  dots.each(function (key, li) {
    $(li).on("click", function () {
      active = key;
      reloadSlider();
    });
  });

  $(window).on("resize", function (event) {
    reloadSlider();
  });
});
