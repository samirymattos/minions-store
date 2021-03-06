<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <title>Minions Store</title>
  <script>
    document.documentElement.className += " js";
  </script>
</head>

<body>
  <header>
    <nav class="menu container">
      <button data-menu="button" aria-expanded="false" aria-controls="menu">
        Menu
      </button>
      <ul data-menu="list" id="menu">
        <li><a href="#forms">Quero Pedir</a></li>
        <li><a href="#produtos">Produtos</a></li>
        <img src="assets/img/minionsmovie.png" alt="Logo Minions" />
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#forms">Fale Conosco</a></li>
      </ul>
    </nav>
  </header>

  <section id="sobre">
    <div class="container sobre">
      <div class="grid-7 img-minions">
        <img src="assets/img/Meu-Malvado-Favorito-Minions-3-PNG.png" alt="Minions" />
      </div>
      <div class="grid-9 text-sobre">
        <h1>Minions Store</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex,
          numquam. Sit iste assumenda nam nisi corporis unde earum magni
          corrupti sapiente sint quibusdam voluptate voluptatem dolores
          tenetur, necessitatibus itaque autem. Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Quo, dolor cupiditate quia iure
          temporibus reiciendis ipsa aliquid harum dignissimos perspiciatis
          eaque quos libero minima! Optio hic perferendis magni iste iure.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis
          repellendus ullam accusantium, iure eum, maiores esse adipisci
          cupiditate porro magni odit? Ipsum alias illum sint itaque deleniti
          asperiores quasi ullam!
        </p>
      </div>
    </div>
  </section>

  <section id="produtos">
    <div class="container lista-produtos">
      <ul data-slide="principal">
        <li class="produto">
          <div class="grid-8 img-produto">
            <img src="assets/img/Meu-Malvado-Favorito-Minions-Stuart-PNG.png" />
          </div>
          <div class="grid-8 conteudo">
            <h2>Stuart</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed,
              soluta quidem iusto voluptates esse rem, obcaecati ipsam
              consectetur sit facilis autem minima maxime error voluptatum
              incidunt ipsa. Exercitationem, aliquid amet!
            </p>
            <h3>R$ 35,00</h3>
            <div class="button">
              <a href="#forms" class="btn-geral btn-produto">Quero o meu!!</a>
            </div>
          </div>
        </li>
        <li class="produto">
          <div class="grid-8 img-produto">
            <img src="assets/img/minions-png.png" />
          </div>
          <div class="grid-8 conteudo">
            <h2>Bob</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed,
              soluta quidem iusto voluptates esse rem, obcaecati ipsam
              consectetur sit facilis autem minima maxime error voluptatum
              incidunt ipsa. Exercitationem, aliquid amet!
            </p>
            <h3>R$ 35,00</h3>
            <div class="button">
              <a href="#forms" class="btn-geral btn-produto">Quero o meu!!</a>
            </div>
          </div>
        </li>
        <li class="produto">
          <div class="grid-8 img-produto">
            <img src="assets/img/863ab693215bb12ef2cfd3bb51ff440b.png" />
          </div>
          <div class="grid-8 conteudo">
            <h2>Kevin</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed,
              soluta quidem iusto voluptates esse rem, obcaecati ipsam
              consectetur sit facilis autem minima maxime error voluptatum
              incidunt ipsa. Exercitationem, aliquid amet!
            </p>
            <h3>R$ 35,00</h3>
            <div class="button">
              <a href="#forms" class="btn-geral btn-produto">Quero o meu!!</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section id="forms">
    <div class="button">
      <button id="btn-form-minion" class="btn-geral">Quero Pedir</button>
      <button id="btn-form-contact" class="btn-geral">Fale Conosco</button>
    </div>
    <form id="form-minion" method="GET" action="enviar-pedido.php" class="grid-8 container formphp active">
      <input type="text" id="nome-pedido" name="nomePedido" placeholder="Nome" required />
      <input type="text" id="email-pedido" name="emailPedido" placeholder="E-mail" required />
      <select required name="minion">
        <option disabled selected value>O Minion</option>
        <option value="Stuart">Stuart</option>
        <option value="Bob">Bob</option>
        <option value="Kevin">Kevin</option>
      </select>
      <input type="number" id="quant" name="quantidade" placeholder="Quantidade" required />
      <button id="enviar" name="submit" type="submit" value="submit" class="btn btn-geral submit">Enviar</button>
    </form>
    <form id="form-contact" class="grid-8 container formphp">
      <input type="text" id="nome" placeholder="Nome" />
      <input type="text" id="email" placeholder="E-mail" />
      <input type="tel" id="tel" placeholder="Telefone" />
      <textarea id="espec" placeholder="O que gostaria de nos contar?"></textarea>
      <button type="submit" class="btn btn-geral">Enviar</button>
    </form>
  </section>

  <footer>
    <div class="desenvolvido container">
      <a href="https://www.linkedin.com/in/samiry-de-mattos-972028114/" target="_blank">Bell's</a>
    </div>
    <div class="copyright">
      <p class="container">&copy; Copyright 2020</p>
    </div>
  </footer>

  <script src="assets/js/simple-slide.js"></script>
  <script src="assets/js/simple-form.js"></script>
  <script type="module" src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>