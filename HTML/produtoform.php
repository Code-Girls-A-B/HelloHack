<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="../CSS/produtoform.css">
    <link rel="stylesheet" href="../CSS/botaoVer.css">
    <title>formulário produtos</title>
</head>

<body>
    <header>
        <nav>
            <ul class="menu">
                <div class="img">
                    <img src="../IMG/logo.svg" alt="" />
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

    <div id="btn">
        <a href="verInfoPagam.php">
            <button class="botao">Ver InfoPagam</button>
        </a>
    </div>

    <div class="container">

        <form method="POST" action="../processamento/processamentoProduto.php">

            <div class="row">

                <div class="col">

                    <h3 class="title">Cadastro de compra</h3>

                    <div class="inputBox">
                        <span>Nome completo:</span>
                        <input type="text" name="inputNome" placeholder="Fulano da Silva">
                    </div>
                    <div class="inputBox">
                        <span>email:</span>
                        <input type="email" name="inputEmail" placeholder="FSilva@example.com">
                    </div>
                    <div class="inputBox">
                        <span>Endereço:</span>
                        <input type="text" name="inputEndereco" placeholder="Rua dos pássaros">
                    </div>
                    <div class="inputBox">
                        <span>Cidade:</span>
                        <input type="text" name="inputCidade" placeholder="sonholândia">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>estado:</span>
                            <input type="text" name="inputEstado" placeholder="São Paulo">
                        </div>
                        <div class="inputBox">
                            <span>cep:</span>
                            <input type="text" name="inputCep" placeholder="123456789-12">
                        </div>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">Forma de pagamento</h3>

                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="../IMG/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>nome do cartão:</span>
                        <input type="text" name="inputNomeCartao" placeholder="mr. Fulano silva">
                    </div>
                    <div class="inputBox">
                        <span>número do cartão de crédito:</span>
                        <input type="number" name="inputNumCartao" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>mês de expiração:</span>
                        <input type="text" name="inputMesVenc" placeholder="january">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>ano de expiração:</span>
                            <input type="number" name="inputAnoVenc" placeholder="2022">
                        </div>
                        <div class="inputBox">
                            <span>CVV:</span>
                            <input type="text" name="inputCvv" placeholder="1234">
                        </div>
                    </div>

                </div>

            </div>

            <button  class="submit-btn">Comprar Produto</button>

        </form>

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