const whatsApp = document.querySelector("button.whatsapp");
const number = "6282152519079";
whatsApp.addEventListener("click", function () {
  window.open(`https://api.whatsapp.com/send?phone=${number}`, "_blank");
});
