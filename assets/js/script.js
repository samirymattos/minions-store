// Slide Simplificado
new SimpleSlide({
  slide: "principal",
  nav: true,
  auto: true,
  time: 5000,
  pauseOnHover: true
});

function activeFormPedido() {
  console.log("b");
  formContact.classList.remove("active");
  formMinion.classList.add("active");
}

function activeFormContato() {
  console.log("a");
  formMinion.classList.remove("active");
  formContact.classList.add("active");
}

// Botões form

const btnPedido = document.querySelector("#btn-form-minion");
const btnContato = document.querySelector("#btn-form-contact");
const formMinion = document.querySelector("#form-minion");
const formContact = document.querySelector("#form-contact");

btnPedido.addEventListener("click", activeFormPedido);

btnContato.addEventListener("click", activeFormContato);

// Botão Produtos

const btnStuart = document.querySelector("#btn-stuart");

btnStuart.addEventListener("click", activeFormPedido);
