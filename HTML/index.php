<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloHack</title>
    <link rel="stylesheet" href="../CSS/style.css"">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

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

    <section class="inicial">
        <div class="inicial-text">
            <h1>Bem Vindo Hackers</h1>
            <p>O hacking é a arte de explorar os limites da tecnologia e abrir caminhos para a inovação. Os hackers são os arquitetos da revolução digital, desvendando os segredos do mundo virtual.</p>
            <a href="cursos.php">Cursos</a>
            <a href="produtos.php" class="btn2">Produtos</a>
        </div>
        <div class="img-hack">
            <img src="../IMG/Hacker-pana.svg" alt="">
        </div>
    </section>

    <section class="info">
        <div class="info-img">
            <img src="../IMG/Security On-bro.svg" alt="">
        </div>
        <div class="info-text">
            <span>InfoHack</span>
            <h2>Bobeou Hackeou</h2>
            <p>Lembrando que o hacking ético é legal e benéfico para melhorar a segurança dos sistemas, mas invadir sistemas sem autorização é uma atividade ilegal e prejudicial.</p>
            <a class="btn" href="infohack.php">InfoHack</a>
        </div>
    </section>

    <section class="cursos">
        <div class="cursos-text">
            <span>Cursos</span>
            <h2>O que Oferecemos:</h2>
            <p>Nosso curso de hacking oferece uma base sólida de conhecimentos, habilidades práticas e suporte contínuo para impulsionar sua carreira em segurança da informação.</p>
            <a class="btn" href="cursos.php">Cursos</a>
        </div>
        <div class="cards-curso">
            <div class="card-curso">
                <ion-icon class="icone" name="bug-outline"></ion-icon>
                <p>hacker ético</p>

            </div>
            <div class="card-curso">
                <ion-icon class="icone" name="terminal-outline"></ion-icon>
                <p>Shell script</p>
            </div>
            <div class="card-curso">
                <ion-icon class="icone" name="ribbon-outline"></ion-icon>
                <p>Certificado</p>
            </div>
            <div class="card-curso">
                <ion-icon class="icone" name="desktop-outline"></ion-icon>
                <p>Pentest</p>
            </div>
        </div>
    </section>


    <section class="depoimentos">
        <h1>O que estão falando dos nossos cursos e produtos?</h1>
        <section class="cards">
            <div class="card">
                <img class="user" src="../IMG/joao.jpg" alt="">
                <h3>Jorge</h3>

                <div class="stars">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                </div>

                <p>Eu gostei muito do curso de hacker ético, me ajudou a entender e encontrar vulnerabilidades em sites. eu aprendi muito.</p>
            </div>

            <div class="card">
                <img class="user" src="../IMG/julia.jpg" alt="">
                <h3>Julia</h3>

                <div class="stars">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                </div>

                <p>Adorei, a camiseta é de ótima qualidade. Eu recomendo. </p>
            </div>

            <div class="card">
                <img class="user" src="../IMG/marcos.jpg" alt="">
                <h3>Marcos</h3>

                <div class="stars">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                    <img class="star" src="../IMG/star.svg" alt="">
                </div>

                <p>Eu gostei muito do curso de hacker ético, me ajudou a entender e encontrar vulnerabilidades em sites. eu aprendi muito.</p>
            </div>
        </section>
    </section>



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