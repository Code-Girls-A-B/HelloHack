<?php
    require "../processamento/funcoesBD.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/vercontatos.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <title>Contatos</title>
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

    <section class="conteudo-visualizar">
        <section class="conteudo-visualizar-box">
            <h1>Usuarios Cadastrados</h1>
            <?php
                $listaUsuario = retornaUsuario();
                while($usuario = mysqli_fetch_assoc($listaUsuario))
                {
                    echo "<section class=\"conteudo-bloco\">";
                    echo "<h2>" . $usuario["nome"] . "</h2>";
                    echo "<p>E-mail: " . $usuario["email"] . "</p>";
                    echo "<p>Senha: " . $usuario["senha"] . "</p>";
                    echo "</section>";
                }
            ?>
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