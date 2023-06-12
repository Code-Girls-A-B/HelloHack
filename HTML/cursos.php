<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/cursos.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="../CSS/botaoVer.css">
    <title>Cursos HelloHack</title>
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

    <div id="btn">
        <a href="verMatricula.php">
            <button class="botao">Ver Matriculados</button>
        </a>
    </div>

    <main class="cards">
        <section class="card course">
            <div class="icon">
                <img src="../IMG/cursos/Shellscript.png" alt="curso shell script">
            </div>
            <h3>Curso de Shell Script</h3>
            <span>Melhore suas habilidades de programação e automatização de tarefas no mundo da tecnologia.</span>
            <a href="../HTML/cursoinfoshell.php">
                <button class="curso">Comprar</button>
            </a>
        </section>
        <section class="card course">
            <div class="icon">
                <img src="../IMG/cursos/pentest.png" alt="Curso de Pentest">
            </div>
            <h3>Curso Pentest</h3>
            <span>identifique vulnerabilidades em sistemas e redes e impulsione sua carreira na área de segurança cibernética. </span>
            <a href="../HTML/cursoinfopentest.php">
                <button class="curso">Comprar</button>
            </a>
            
        </section>
        <section class="card course">
            <div class="icon">
                <img src="../IMG/cursos/Linux.png" alt="Curso de Linux">
            </div>
            <h3>Curso de Linux</h3>
            <span>Domine esse sistema operacional de código aberto e ampliar suas habilidades no campo da tecnologia.</span>
            <a href="../HTML/cursoinfolinux.php">
                <button class="curso">Comprar</button>
            </a>
        </section>
        <section class="card course">
            <div class="icon">
                <img src="../IMG/cursos/criptografia.png" alt="Curso de criptografia">
            </div>
            <h3>Curso de Criptografia</h3>
            <span>Prepare-se para ser um(a) especialista em criptografia, contribuindo para a segurança digital em um mundo cada vez mais interconectado.</span>
            <a href="../HTML/cursoinfocripto.php">
                <button class="curso">Comprar</button>
            </a>
        </section>
        <section class="card course">
            <div class="icon">
                <img src="../IMG/cursos/hacker.png" alt="Curso de Hacker Ético">
            </div>
            <h3>Curso de Hacker Ético</h3>
            <span>Desenvolva habilidades valiosas para proteger sistemas e enfrentar ameaças cibernéticas. </span>
            <a href="../HTML/cursoinfohacker.php">
                <button class="curso">Comprar</button>
            </a>
        </section>

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