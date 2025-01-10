<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeLock</title>
    <link rel="stylesheet" href="style/style-login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/db29c2ca45.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>

        <head>
            <nav>
                <div class="box-nav">
                    <h1 class="nav-login">SafeLock </h1>
                    <i id="icon-lock" class="fa-solid fa-lock"></i>
                </div>
            </nav>
        </head>


        <div class="container-center">
            <div class="box-center">
                <h1 class="login-title">Login</h1>
                <div class="login-div">
                    <form action="app/config/login.php" method="get">
                        <input class="login-box" type="text">
                        <input class="login-box" type="text">
                        <input class="subimit-button" type="submit" value="Logar">
                    </form>
                </div>

            </div>
        </div>



        <footer>
            <div class="footer-div">
                <p id="footer-text-p">
                    Safe Lock © [Ano Atual]. Todos os direitos reservados.
                    Bem-vindo ao Safe Lock, seu gerenciador de senhas confiável. Nosso compromisso é garantir sua
                    segurança digital, oferecendo uma plataforma segura e intuitiva para gerenciar e proteger suas
                    informações confidenciais.
                </p>
                <p id="footer-text-p">
                    Segurança em primeiro lugar
                    Levamos sua privacidade a sério. Todos os dados armazenados no Safe Lock são criptografados de ponta
                    a ponta, garantindo que apenas você tenha acesso às suas informações. Nunca compartilhamos, vendemos
                    ou acessamos suas senhas sem o seu consentimento explícito.
                </p>
            </div>
        </footer>
    </main>
</body>

</html>