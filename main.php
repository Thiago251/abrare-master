<?php

include('validacao.php');
if(!isset($_SESSION)){
    session_start();

  }

//include('validacao.php');

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Abaré Tech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/etline-font.css">
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/logo.bmp">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="#logo"><img src="img/" alt=""></a></div>
                    <div class="header-nav">
                    <nav>
                            <ul class="primary-nav">        
                                <li><a href="http://127.0.0.1/abrare-master/main.php">HOME</a></li>                  
                                <li><a href="http://127.0.0.1/abrare-master/jogos.php" >Jogos</a></li>
                                <li><a href="http://127.0.0.1/abrare-master/videos.php" >Vídeos</a></li>
                                <li><a href="http://127.0.0.1/abrare-master/arduino.php" >Arduíno</a></li>
                                <li><a href="http://127.0.0.1/abrare-master/raspberry.php">Raspberry Pi</a></li>
                                <li><a href="http://127.0.0.1/abrare-master/python.php">Python</a></li>
                                <li><a href="http://127.0.0.1/abrare-master/noticias.php">Notícias</a></li>
                                <li><a href="contatos.html" target="contatos.html">Contato</a></li>
                                <li><a href="https://classroom.google.com/c/MzIwNTYxMDQ4NDg3?cjc=3y3joqu"
                                        target="https://classroom.google.com/c/MzIwNTYxMDQ4NDg3?cjc=3y3joqu">Fórum</a></li>
                             </ul>
                            <ul class="member-actions">
                                <li><a href="logout.php" class="btn-white btn-small">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
        <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
    </section>
    <section class="intro section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                    </div>
                    <div class="intro-content">
                        <img src="img/unnamed.jpg" alt="unnamed" style="width: 100%">
                        <h3><strong>Nossa Missão</strong></h3>
                        <p><strong>Levar a linguagem de programação para as crianças e adolescente utilizando as
                                ferramentas gratuítas disponibilizadas para praticar e desenvolver a linguagem básica a
                                mais avançada relaciondas a Arduíno e Raspberry Pi.</strong></p>
                               
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                    </div>
                    <div class="intro-content">
                        <img src="img/unnamed (1).jpg" alt="unnamed (1)" style="width: 80%">
                        <h3><strong>Linguagem de programação C++ e Python </strong></h3>
                        <p><strong>Aprender a programar e a desenvolver tecnologias, das mais simples às mais
                                rebuscadas, trabalhar isso na infância ajuda muito o aluno a melhorar o seu desempenho
                                no futuro.</strong></p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                    </div>
                    <div class="intro-content">
                        <img src="img/beneficios.jpeg" alt="beneficios" style="width: 80%">
                        <h3><strong>Benefícios para as crianças</strong></h3>
                        <p><strong>Estímulo do coordenação motora, raciocínio lógico, desafios constantes à
                                criatividade, ajuda a organizar os pensamentos e principalmente Trabalho em
                                equipe.</strong> 
                        <p>
                        
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                    </div>
                    <div class="intro-content last">
                        <img src="img/fig1.png" alt="fig1" style="width: 75%">
                        <h3><strong>Comunicação de Alunos</strong></h3>
                        <p><strong>Grupos para trocar informações e tirar duvidas como whatsapp, GoogleMeet, Discord e
                                forúm do próprio site.</strong></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="blog-intro section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Frases de Programadores</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 leftcol">
                    <h4><strong>David Ribeiro</strong></h4>
                    <p><strong>"Não é a linguagem de programação que define o programador, mas sim sua lógica".</strong>
                    </p>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 rightcol">
                    <h4><strong>Thales Valentim</strong></h4>
                    <p><strong>"Ser desenvolvedor é uma viagem onde a próxima parada é a solução de um
                            problema".</strong></p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-slider section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="avatar"><img src="img/foto.jpeg" alt="Thiago"></div>
                                <h3>Thiago Samurai</h3>
                                <h2>"Membro externo."</h2>
                                <p class="author">Desenvolvedor Web
                                    Jr -  Shell Script - Pesquisandor em Cyber Seguraça</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/alonso.png" alt="alonso"></div>
                                <h3>Alonso Martins</h3>
                                <h2>"Membro fundador do projeto Abaré Tech."</h2>  
                                <p class="author">Desenvolvedor Web</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/marden2.jpeg" alt="marden"></div>
                                <h3>Marden Jeyffer</h3>
                                <h2>"Membro fundador do projeto Abaré Tech"</h2>
                                <p class="author">Especialista em
                                    Controle de Automação Industrial - Redes Insdustriais - Robótica - Embarcados - Data Science </p>
                           </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5">
                <div class="small text-center text-muted">Copyright &copy; 2021 - Company
                    <h4> Siga-nos para melhor nos conhecermos </h4>
                    <a class="button large teal" href="https://www.facebook.com/Abar%C3%A9tech_Oficial-107763298353391/?view_public_for=107763298353391" title="Facebook"> <i class="fa fa-facebook">
                        </i> </a>
                    <a class="button large teal" href="https://www.youtube.com/channel/UCsQofbaQAt0AFBgJIM-OQdg" title="YouTube"> <i class="fa fa-youtube">
                        </i> </a>
                    <a class="button large teal" href="https://www.instagram.com/abaretech_oficial/" title="Instagram"> <i class="fa fa-instagram">
                        </i> </a>
                         <a class="button large teal" href="https://www.linkedin.com/in/abar%C3%A9tech-oficial-068221223/" title="linkedin"> <i class="fa fa-linkedin">
                            </i> </a>
                             <a class="button large teal" href="https://github.com/abaretechoficial" title="github"> <i class="fa fa-github">
                            </i> </a>
                    <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
                </div>
            </div>

        </footer>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="bower_components/retina.js/dist/retina.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="bower_components/classie/classie.js"></script>
    <script src="bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l; b[l] || (b[l] =
                    function () { (b[l].q = b[l].q || []).push(arguments) }); b[l].l = +new Date;
                e = o.createElement(i); r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto'); ga('send', 'pageview');
    </script>





</body>

</html>