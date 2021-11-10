const whatsApp = document.querySelectorAll("button.whatsapp");
const number = "6282152519079";
whatsApp.forEach((e) => {
  e.addEventListener("click", function () {
    window.open(`https://api.whatsapp.com/send?phone=${number}`, "_blank");
  });
});

$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,

    nav: false,
    autoplay: true,
    autoplayTimeout: 6000,
    responsive: {
      0: {
        items: 1,
      },
    },
  });
});
