<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/loginstyle.css">
    <link rel="stylesheet" href="../CSS/botaoVer.css">
    <title>Login</title>
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

            </ul>
        </nav>
    </header>

    <div id="btn">
        <a href="verUsuario.php">
            <button class="botao">Ver Usuarios</button>
        </a>
    </div>

    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Seja bem Vindo!</h2>
                <p class="description description-primary">mantenha-se conectado conosco</p>
                <p class="description description-primary">Se já possui cadastro logue-se</p>
                <button id="signin" class="btn btn-primary">Logar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Criar Conta</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use suas redes para se registrar</p>
                <form class="form" method="POST" action="../processamento/processamentologin.php">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="inputNome" placeholder="Nome">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="inputEmail" placeholder="Email">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="inputSenha" placeholder="Senha">
                    </label>

                    <button class="btn btn-second">Cadastrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá, Amigo!</h2>
                <p class="description description-primary">Cadastre-se com suas informações</p>
                <p class="description description-primary">e comece sua jornada conosco!</p>
                <button id="signup" class="btn btn-primary">Cadastrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Logar com sua Conta</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use suas redes para logar:</p>
                <form class="form" method="POST" action="../processamento/processamentologin.php">

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha">
                    </label>

                    <a class="password" href="#">Esqueci minha senha?</a>
                    <button class="btn btn-second">Logar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="../JS/script.js"></script>
    
    <!-- rodapé -->
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