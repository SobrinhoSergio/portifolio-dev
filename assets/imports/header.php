<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sérgio de Souza Lima Sobrinho">
    <title>Sérgio Sobrinho - Portifólio</title>
    <!--Style CSS-->
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/dark-mode.css">
    <link rel="stylesheet" href="./assets/style/responsive.css">
    <!--shortcut icon-->
    <link rel="shortcut icon" href="assets/imagens/icones/faicon.png">
    <!-- JQUERY --> 
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
     <!--FONTAWESOME-->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" 
     integrity="sha384-sl'e=or8p86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

<div class="loading">
    <span></span>
    <span></span>
    <span></span>
</div>

<div class="conteudo">

<header>
    <section class="header container">
        <div class="logo">
            <a href="index.php">
                <h1>Dev. <span>Full-Stack</span></h1>
            </a>
        </div>
        <nav class="navbar">

            <button class="btn-mobile">
                Menu
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </button>
            

            <ul class="menu">
                <li class="about"><a href="index.php">Home</a></li>
                <li class="projects"><a href="projetos.php">Projetos</a></li>
                <li class="contact"><a href="contato.php">Contato</a></li>
                <li id="dark-mode">
                    <div class="toggle">
                        <p>Dark Mode </p>
                        <input id="switch" type="checkbox" name="theme">
                        <label for="switch">Toggle</label>
                    </div>
                </li>
            </ul>
        </nav>
    </section>
</header>