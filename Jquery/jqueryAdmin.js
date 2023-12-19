function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", " ");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

// $(document).ready(function(){
//     function openCity(evt,cityName){
//         var i, tabcontent, tablinks;
//         tabcontent = $(".tabcontent");
//         for(i = 0 ; i < tabcontent.length; i++){
//             tabcontent[i].css("display" , "none");
//         }
//         tablinks = $(".tablinks");
//         for(i=0; i< tablinks.length; i++){
//             tablinks[i].className = tablinks[i].className.replace(" .active","");
//         }
//         $("#cityName").css("display","block");
//         evt.currentTarget.addClass() ;
//     }
//     $("#defaultOpen").click();
// });

$(document).ready(function () {
  var d = new Date();
  var strDate =
    "Date :" +
    d.getFullYear() +
    "/" +
    (d.getMonth() + 1) +
    "/" +
    d.getDate() +
    " Hours :" +
    d.getHours() +
    ":" +
    d.getMinutes() +
    ":" +
    d.getSeconds();

  $(".date").children("h2").prepend(strDate);

  $(".taplinks").mouseover(function () {
    $(this).addClass("behove");
  });
  $(".taplinks").mouseout(function () {
    $(this).removeClass("behove");
  });

  const Orders = [
    // {
    //   productName: "Foldable Mini Drone",
    //   productNumber: "73247",
    //   paymentState: "Due",
    //   shipping: "Pending",
    // },
    // {
    //   productName: "Foldable Mini Drone",
    //   productNumber: "73247",
    //   paymentState: "Due",
    //   shipping: "Delined",
    // },
    // {
    //   productName: "Foldable Mini Drone",
    //   productNumber: "73247",
    //   paymentState: "Due",
    //   shipping: "Delivered",
    // },
    // {
    //   productName: "Foldable Mini Drone",
    //   productNumber: "73247",
    //   paymentState: "Due",
    //   shipping: "Pending",
    // },
  ];

  const sideMenu = $("aside");
  const menuBtn = $("#menu-btn");
  const closeBtn = $("#close-btn");
  const themeToggler = $(".theme-toggler");

  // Side Menu Interaction
  menuBtn.on("click", function () {
    sideMenu.show();
  });

  closeBtn.on("click", function () {
    sideMenu.hide();
  });

  // Theme Toggle
  themeToggler.on("click", function () {
    $("body").toggleClass("dark-theme-variables");
    $(this).find("span:nth-child(1)").toggleClass("active");
    $(this).find("span:nth-child(2)").toggleClass("active");
  });

  // Rendering Orders in a Table
  // Orders.forEach(function (order) {
  //   const trContent = `
  //           <td>${order.productName}</td>
  //           <td>${order.productNumber}</td>
  //           <td>${order.paymentState}</td>
  //           <td class="${
  //             order.shipping === "Delined"
  //               ? "danger"
  //               : order.shipping === "Pending"
  //               ? "warning"
  //               : "primary"
  //           }">${order.shipping}</td>
  //           <td class="primary"></td>
  //       `;

  // });
});
