<?php

if(isset($_POST['submit']))
{
//print_r('Nome: ' . $_POST['nome']);
//print_r('<br>');
//print_r('E-mail: ' . $_POST['email']);
//print_r('<br>');
//print_r('Senha: ' . $_POST['senha']);
//print_r('<br>');

include_once('config_preenchimento_dados_formulário.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$result = mysqli_query($conexão, "INSERT INTO t_usuario(nome, email ,senha) VALUES ('$nome', '$email', '$senha')");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    />
    <title>MILLENIUM VEÍCULOS</title>
  </head>
  <body id="my-element">
    <header id="my-element">
      <img
        class="logo"
        src="https://cdn.imgbin.com/1/25/22/imgbin-yugi-mutou-maximillion-pegasus-bakura-millennium-items-yu-gi-oh-collar-0krvCvSrwVr50Jn9b3Ed36MEz.jpg"
      />
      <button id="show-nav" class="show-nav">Menu
      </button>
      <h1 class="nome-rest">MILLENIUM VEÍCULOS</h1>

      <nav id="my-element">
        <ul id="my-element">
          <li><a href="index.html">Início</a></li>
          <li><a href="cardapio.html">Locação</a></li>
          <li><a href="aboutus.html">Cliente</a></li>
          <li><a href="aboutus.html">Carros</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="box">
        <form action="Teste_cliente.php" method="post">
            <fieldset>
                <legend><b>Cadastrar Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="Nome" class="inputUser" required>
                    <label for="nome" class="labelInput"> Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput"> E-Mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput"> Senha</label>
                </div>
                <br><br>
                <button type="submit" name="submit" id="submit">Enviar</button>          
            </fieldset>
        </form>      
    </div>
    </main>
    <footer id="my-element">
      <nav id="my-element" class="rodape">
        <ul>
            <li>
              <p><a href="reservas.html">Fale Conosco</a></p>                       
            </li>
               <div id="my-element" class="verticalline"></div>   
               <div class="imgfootermobile">
            <li>
              <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png">
            </li>
            <li>
              <img src="https://cdn-icons-png.flaticon.com/128/174/174848.png">
            </li>
            <li>
              <img src="https://cdn-icons-png.flaticon.com/512/3256/3256013.png">
            </li>
            <li>
              <img src="https://cdn-icons-png.flaticon.com/512/3116/3116490.png">
            </li>
            <li>
              <img src="https://cdn-icons-png.flaticon.com/512/174/174883.png">
            </li>
          </div>
        </ul>

      </nav>
      <p class="footer-copy">&copy; 2023 Meu Portfólio. Todos os direitos reservados.</p>
    </footer>  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".carousel").slick({
          dots: true, // exibe pontos de navegação abaixo do carrossel
          arrows: false, // oculta os botões de navegação padrão
          autoplay: true, // inicia a reprodução automática
          autoplaySpeed: 2000, // define a velocidade da reprodução automática em milissegundos
        });
        const showNavButton = document.querySelector("#show-nav");
        const nav = document.querySelector("header #my-element");
        console.log(showNavButton)

        if (showNavButton && nav) {
          showNavButton.addEventListener("click", () => {
            nav.classList.toggle("show-nav"); console.log(showNavButton)
            
          });
        }

        window.addEventListener("resize", function () {
          // Verifica o tamanho da tela atual
          if (window.innerWidth < 600) {
            // Se a largura da tela for menor que 600 pixels,
            // altera a classe do elemento para torná-lo responsivo
            document.getElementById("my-element").classList.add("responsive");
          } else {
            // Caso contrário, remove a classe para que o elemento volte ao normal
            document
              .getElementById("my-element")
              .classList.remove("responsive");
          }
        });
      });
    </script>
  </body>
</html>
