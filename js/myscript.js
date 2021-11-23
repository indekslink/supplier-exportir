const whatsApp = document.querySelectorAll("button.whatsapp");
const number = "6282152519079";
whatsApp.forEach((e) => {
  e.addEventListener("click", function () {
    window.open(`https://api.whatsapp.com/send?phone=${number}`, "_blank");
  });
});

const navTransparent = document.querySelector(".my-nav");
const sliderHeroKonten = document.querySelector("#slider.hero-konten");
window.onscroll = function () {
  // console.log(window.scrollY);
  if (!sliderHeroKonten) {
    navTransparent.classList.toggle("transparent", window.scrollY < 50);
  }
};
document
  .querySelector(".hamburger-menu")
  .addEventListener("click", function () {
    document.querySelector(".my-nav .my-menu").classList.toggle("show");
  });

if (sliderHeroKonten) {
  sliderHeroKonten.style.marginTop = navTransparent.clientHeight + "px";
}
