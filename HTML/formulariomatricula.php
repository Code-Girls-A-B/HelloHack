<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="../CSS/formpaga.css">
    <title>Cursos HelloHack - Formulário de Matrícula</title>
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

    <div class="wrapper">
        <div class="title">Formulário de Matrícula</div>
        <div class="checkout_form">
            <form method="POST" action="../processamento/processamentoCurso.php">
                <div class="input_item">
                    <input type="text" placeholder="Nome do curso desejado" name="inputNomeCurso">
                </div>
                <div class="input_item">
                    <input type="text" placeholder="Digite o seu nome completo" name="inputNome">
                </div>
                <div class="input_item">
                    <input type="text" placeholder="Digite o seu melhor e-mail" name="inputEmail">
                </div>
                <div class="input_item">
                    <input type="text" placeholder="Digite o seu numero CPF" name="inputCpf">
                </div>
                <div class="input_item">
                    <input type="number" placeholder="Digite o seu número do celular" name="inputNumCelular">
                </div>

                <div class="centraliza-input">
                    <div id="input_item">
                        <label for="pagamento">Selecione a forma de pagamento:</label>
                        <select id="pagamento" name="selectPagamento" required>
                            <option value="">Selecione</option>
                            <option value="cartao">Cartao</option>
                            <option value="pix">Pix</option><br><br>
                        </select>
                    </div>
                </div><br>
                <div class="center">
                    <button class="btn">Matricular</button>
                </div>

            </form>
        </div>
    </div>

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