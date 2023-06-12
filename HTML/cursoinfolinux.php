<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/cursoinfos.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>    
    <title>Cursos HelloHack - linux</title>
</head>

<body>
    <header>
        <nav>
            <ul class="menu">
                <div class="img">
                    <img src="../IMG/logo.svg" alt="">
                </div>
                <div class="navigation">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="infohack.php">InfoHack</a></li>
                    <li><a href="cursos.php">Cursos</a></li>
                    <li><a href="produtos.php">Produtos</a>
                    <li><a href="contato.php">Contatos</a></li>
                </div>
                <div class="login">
                    <li><a href="login.php">Login</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <main class="container">

      <!-- Left Column -->
      <div class="left-column">
        <img data-image="black" src="../IMG/cursos/linux.png" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Curso de Linux</span>
          <h1>Linux</h1>
          <p>Compreender os conceitos fundamentais do Linux o(a) capacitará a personalizar e configurar o sistema de acordo com suas necessidades específicas, além de permitir que você explore diferentes distribuições e ferramentas disponíveis.</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Cable Configuration -->
          <div class="cable-config">
            <span>Selecione o nivel</span>

            <div class="cable-choose">
              <button>Básico</button>
              <button>Intermediario</button>
              <button>Avançado</button>
            </div>

            <a href="#">Mais informações sobre o curso</a>
          </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span>R$650,00</span>
          <a href="../HTML/formulariomatricula.php" class="cart-btn">Comprar</a>
        </div>
      </div>
    </main>

    <footer class="footer-distribuded">
        <div class="footer-left">
            <img src="../IMG/logo.svg" alt="">

            <p class="footer-links">
                <a href="index.php">Home</a>
                |
                <a href="infohack.php">InfoHack</a>
                |
                <a href="cursos.php">Cursos</a>
                |
                <a href="produtos.php">Produtos</a>
                |
                <a href="contato.php">Contatos</a>
            </p>

            <p class="footer-company-name">Copyright &copy 2023 <strong>HelloHack</strong> Todos os direitos reservados</p>
        </div>

        <div class="footer-center">
            <div>
                <ion-icon name="location-outline"></ion-icon>
                <p><span>Presidente Prudente - SP</span></p>
            </div>
            <div>
                <ion-icon name="call-outline"></ion-icon>
                <p>(18)90000-0000</p>
            </div>
            <div>
                <ion-icon name="mail-outline"></ion-icon>
                <p><a href="#">HelloHack@gmail.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about">
                <span>Sobre Nós</span>
                <strong>Hello Hack</strong> é um grupo de estudantes de ADS com o intuito de repassar conhecimento voltado a hacker ético e vender produtos legais para quem gosta deste universo da segurança da informação.
            </p>
            <div class="footer-icons">
                <a href="#"><ion-icon name="logo-github"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
            </div>
        </div>
    </footer>
</body>

</html>