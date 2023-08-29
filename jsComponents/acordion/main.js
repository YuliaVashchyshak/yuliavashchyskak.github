const icon = document.querySelectorAll('.services__icon')

const btn = document.querySelectorAll('.services__btn')

for (let i = 0; i < btn.length; i++) {
  btn[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
