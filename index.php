<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- PARAGRAFO -->


    <title>IFTECH Junior - Projetos e Inovações</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <!-- CSS DO VIDEO -->
    <link href="video/styles.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Navegação</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="?pag=index">IFTECH Junior</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>

                <li class="page-scroll">
                    <a href="?pag=index#about">Empresa</a>
                </li>

                <li class="page-scroll">
                    <a href="?pag=quem-somos#conteudo">Sobre nós</a>
                </li>

                <li class="page-scroll">
                    <a href="?pag=index#portfolio">Projetos</a>
                </li>

                <li class="page-scroll">
                    <a href="?pag=index#contact">Fale Conosco</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header class="video-hero" id="index">

    <div class="video-bg demo-video">
        <video autoplay muted loop poster="files/typing-macbook.jpg">
            <source src="video/files/typing-macbook.mp4" type="video/mp4">
            <source src="video/files/typing-macbook.webm" type="video/webm">
            <source src="video/files/typing-macbook.ogv" type="video/ogg">
        </video>
    </div>
    <div class="video-overlay"></div>
    <div class="page-width">
        <div class="video-hero--content">
            <div class="intro-text">
								<span class="name" > 
									<div class="col-md-12">
										<img class="img-responsive" src="img/if_gabi.png" alt="">
										<p style= "font-size: 140%; text-align: center"> Inovando seus sonhos</p> <br>
										<a href="?pag=index#contact" class="btn btn-lg btn-outline">
											<i class="fa fa-users" aria-hidden="true"></i> Faça seu contato
										</a>
									</div>
								</span>

                <span class="skills"></span>
            </div>
        </div>
    </div>

</header>

<? if(isset($_GET['pag'])){
    $pag = $_GET['pag'];
    if($pag=="index"){
        $pag="";
    }

}

if (file_exists($pag.'.php')) {
    include($pag.".php");
}
else{

    ?>
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Diferencial</h2>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6 ">
                    <div align ="center"> <i class="fa fa-usd fa-5x"></i><p>Menores Preços</p>  <p style = "text-align:justify">Somos uma Organização sem fins lucrativos e nossos serviços possuem preço até 70% abaixo do mercado, mas com qualidade de uma empresa sênior.</p></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ">

                    <div align ="center"> <i class="fa fa-thumbs-o-up fa-5x"></i><p>Qualidade</p><p style = "text-align:justify">Fazemos parte do <a style="color: rgb(150,255,255)" href="http://prc.ifsp.edu.br" target="_blank">Instituto Federal de Ciência e Tecnologia</a> e temos um corpo de membros selecionado, qualificado e disposto a ajudar nossos clientes.</p></div>
                </div>
                <div class="col-lg-4 col-md-4  col-sm-offset-3  col-sm-6  col-md-4 col-md-offset-0">
                    <div align ="center"> <i class="fa fa-heart  fa-5x"></i><p>Dedicação</p> <p style = "text-align:justify">Por sermos uma Empresa Júnior, o maior retorno para nossos membros é a dedicação para um maior aprendizado dispostos a inovar seus projetos..</p></div>
                </div>
                <div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2 text-center">
                    <a href="http://www.brasiljunior.org.br/" class="btn btn-lg btn-outline" target="_blank">Conheça o Movimento Brasil Junior </a>

                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>PROJETOS ATUAIS</h2>      <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i><br>
                                Saiba mais<br>
                            </div>
                        </div>
                        <img src="img/aumento.png" style="padding-top:20px; padding-bottom:20px" class="img-responsive img-circle" height="150" width="600">
                        <h3 style="color: rgb(0,0,0)" style="text-align:center">Como alavancar vendas utilizando o Facebook</h4></p>
                    </a>
                </div>


            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Nossa Equipe</h2>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p style = "text-align:justify;  text-indent: 2em">Nós somos a Empresa Júnior de Consultoria e Desenvolvimento de Projetos. <br>
                        Fazemos parte do Intituto Federal de Ciência e Técnologia do Estado de São Paulo (IFSP), onde os alunos são os responsáveis por manter a empresa, tendo a preocupação em inovar, realizar o sonho e atender as necessidades de nossos clientes.</p>
                </div>
                <div class="col-lg-4">
                    <p style = "text-align:justify;  text-indent: 2em"> Visamos pôr em prática o conteúdo aprendido dentro e fora de sala de aula, propondo assim o desenvolvimento e capacitação em gestão para os membros e o desenvolvimento de projetos com qualidade garantida e as melhores tecnologias para nossos clientes.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="?pag=quem-somos" class="btn btn-lg btn-outline">
                        <i class="fa fa-users"></i> A Equipe
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Fale Conosco</h2>    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Seu nome" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>E-mail</label>
                                <input type="email" class="form-control" placeholder="Endereço de e-mail" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Contato</label>
                                <input type="tel" class="form-control" placeholder="Telefone ou Celular" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensagem para nós?</label>
                                <textarea rows="5" class="form-control" placeholder="Digite aqui a sua mensagem..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<? } ?>
<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-5">
                    <h3>Localização</h3>
                    <p>IFSP Rua Diácono Jair de Oliveira, 1005


                        <br> Santa Rosa CEP 13414-155 - Piracicaba - SP
                </div>
                <div class="footer-col col-md-2">
                    <h3>Nós pela Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/IFTech-Junior-1563431880632486/?fref=ts" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook " ></i></a>
                        </li>

                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>

                    </ul>
                </div>
                <div class="footer-col col-md-5">
                    <h3>Sobre Nós</h3>
                    <p>Somos uma empresa junior de consultoria e desenvolvimento de soluções <br> <a href="?pag=quem-somos">Conheça nossa equipe</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; IFTech Junior 2018
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3 style="color: rgb(0,0,0); text-align: center">Projeto: Como alavancar vendas utilizando o Facebook</h3>
                        <p style="text-align: justify text-indent: 2em;"> É um projeto elaborado pelos graduandos em Análise e Desenvolvimento de Sistemas do IFSP de Piracicaba, com o intuito de facilitar a integração dos negócios locais ao Facebook promovendo novas vendas, novos contatos e novos horizontes. </p>

                        <hr class="star-primary">
                        <img src="img/aumentar.jpg" class="img-responsive img-centered img-thumbnail" height="200" width="500" alt="">
                        <p  style="text-align: justify; text-indent: 2em;">  O projeto traz em seu conteúdo, a apresentação das funcionalidades que o Facebook oferece, boas práticas para alavancar suas vendas, resultados, e também novos horizontes para o marketing digital.<br>
                            Os objetivos do projeto são:<br>	</p>

                        <img src="img/leads.png" class="img-responsive img-centered img-thumbnail" height="200" width="500" alt="">
                        <p style="text-align: justify;  text-indent: 2em;">
                            1º Ministrar <b>palestras</b> sobre o conteúdo conforme divulgado em nossa página no Facebook e no website.</p>
                        <p style="text-align: justify;  text-indent: 2em;">
                            2º Desenvolver um <b>workshop</b> que será realizado no campus do IFSP, com o objetivo de aplicar os conceitos em casos reais de clientes e gerar resultados.</p>
                        <p style="text-align: justify;  text-indent: 2em;">
                            3º Utilizar o conteúdo desenvolvido para <b>gerenciar</b> páginas de clientes que tem interesse em alavancar sua marca e vendas.</p>
                        <p style="text-align: justify; text-indent: 2em;">
                            O projeto se encontra no 1º estágio. Para mais informações acesse nossa <a href="fb.com/iftechjr">Página no Facebook</a></p>

                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/freelancer.js"></script>

<!--Video-->
<script src="video/script.js"></script>

</body>

</html>
