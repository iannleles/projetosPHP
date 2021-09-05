<!DOCTYPE html>
<?php include './suporte/config.php' ?>
<html lang="en">
    <head>
        <!-- Theme Made By www.w3schools.com -->
        <!-- Exemplo: https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_company_complete_animation-->
        <title>Minhas Preferências - Painel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="suporte/padrao.css"/>
        <link rel="stylesheet" type="text/css" href="suporte/pref_formulario.css"/>
        <link rel="stylesheet" type="text/css" href="suporte/pref_tabela.css"/>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#myPage">MPP</a> 
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#preferencias">Preferências</a></li>
                        <li><a href="#usuarios">Usuários</a></li>
                        <li><a href="#votar">Votar</a></li>
                        <li><a href="logout.php"> <span class="glyphicon glyphicon-off"></span> Sair  </a></li>                      
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron text-center">
            <h1>MPP</h1> 
            <p>Minhas Preferências - Painel</p>            
        </div>

        <!-- Container (About Section) -->
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Sobre MPP (Minhas Preferências - Painel)</h2><br>
                    <h4>Para o internauta em geral, a página controla uma lista de preferências de até 5 itens e permite que o internauta vote em sua banda favorita.</h4><br>
                    <h4>Para o internauta que se inscrever na página, a página controla uma lista de preferências de até 100 itens, permite que o internauta vote em sua banda favorita e veja o Ranking com resultado de sua votação.</h4><br>
                    <p>* Lembrando que é um exemplo acadêmico, com a finalide de exemplificar:
                        - Cookies (limitando as votações no front-end);
                        - Session (controlando sessão de internautas inscritos - Libera 100 itens e Ranking de votação);
                        - XML (arquivo xml no back-end para armazenar as preferências do internauta);
                        - BD (registrando votações realizadas dos internautas);
                        * Lembrando ainda, que este exemplo está em BOOTSTRAP. Modelo de w3schools.com                    
                    </p>
                    <br><button class="btn btn-default btn-lg">Acesse o blog do professor <a target="_blank" href="http://www.aas.pro.br">AAS.pro.br</a> </button>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-signal logo"></span>
                </div>
            </div>
        </div>

        <!-- Container (Services Section) -->
        <div id="preferencias" class="container-fluid text-center">
            <h2>MINHAS PREFERÊNCIAS</h2>
            <?PHP include './conteudoExclusivoPref_listar.php'; ?>
        </div>

        <!-- Container (Portfolio Section) -->
        <div id="usuarios" class="container-fluid text-center bg-grey">
            <h2>Usuários</h2><br>
            <div class="row text-center slideanim">
                <?php include './conteudo.php' ?>
            </div>
            <br>
        </div>

        <!-- Container (Pricing Section) -->
        <div id="votar" class="container-fluid text-center">
            <div class="text-center">
                <h2>VOTAR</h2>
                <h4>Vote no seu estilo de música preferido</h4>
            </div>
            <div class="row slideanim  "  >
                <?php include './conteudoExclusivoVotar.php'; ?>
            </div>
        </div>

        <!-- Image of location/map -->
        <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
        </footer>

        <script>
            $(document).ready(function () {
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });

                $(window).scroll(function () {
                    $(".slideanim").each(function () {
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>

    </body>
</html>
