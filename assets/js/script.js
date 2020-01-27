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

// Resposta form

new SimpleForm({
  form: ".formphp",
  button: "#enviar",
  erro:
    "<div id='form-erro'><h2>Erro no envio</h2><p>Um erro ocorreu, tente novamente.</p></div>",
  sucesso:
    "<div id='form-suceeso'><h2>Formulário enviado com sucesso</h2><p>Em breve entraremos em contato</p></div>"
});

// Anime

new SimpleAnime();
