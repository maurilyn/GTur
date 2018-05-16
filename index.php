<!doctype html>
<html lang="pt-br">
    <head>
        <?php
            include('meta.php');
        ?>
        <title>GuaruTur | Turismo Guaruj&aacute;</title>
    </head>
    <body>
        <menu>
            <?php
                include('menu.php');
            ?>
        </menu>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row align-items-center">
                            <hr>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="alert alert-secondary text-center" role="alert">
                                    <h1 style="font-family: 'Acme', sans-serif;font-size:30px;color:black;">GuaruTur, o mais completo site de informa&ccedil;&otilde;es tur&iacute;sticas de Guaruj&aacute; - SP</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-5 text-justify">
                                <h2 class="text-center" style="font-size:25px;">Guaruj&aacute;, A P&eacute;rola do Atl&acirc;ntico</h2>
                                <p style="text-indent: 1.5em; font-size:15px;margin: 0;">Famosa pelas suas belezas naturais, praias que cercam a regi&atilde;o e por seu potencial tur&iacute;stico, &eacute; considerada uma das cidades mais bonitas do litoral, conhecida tamb&eacute;m como "P&eacute;rola do Atl&acirc;ntico".</p>
                                <p style="text-indent: 1.5em; font-size:15px;">Possui 27 praias de todos os tamanhos, de v&aacute;rias cores, de &aacute;guas limpas e mar aberto, cada uma com sua particularidade, iluminadas pelo sol e sorriso das crian&ccedil;as e dos surfistas. Al&eacute;m disso, uma delas, a Praia do Tombo, &eacute; a &uacute;nica do Brasil a receber o selo internacional Bandeira Azul. Ao longo dos 22 km das praias guarujaenses, voc&ecirc; encontrar&aacute; trilhas selvagens para praias paradis&iacute;acas, como as praias de Cheira-Lim&atilde;o ou Cambur&iacute;, praias bem movimentadas e de beleza sem igual, como as praias da Pitangueiras ou Enseada, praias distantes, pouco frequentadas e de f&aacute;cil acesso, como &Eacute;den e Mar Casado.</p>
                                <p style="text-indent: 1.5em; font-size:15px;">Mas Guaruj&aacute; oferece muito mais: Trilhas que contam hist&oacute;ria e emocionam; Mirantes com vista para cen&aacute;rios realmente vibrantes; Ilhas rodeadas por &aacute;guas multicoloridas; Fortes, Fortalezas e Pavilh&otilde;es que fazem sentir a nostalgia do passado e encantam tamb&eacute;m pelos personagens que deixaram pegadas na hist&oacute;ria.</p>
                            </div>
                            <div class="col-md-7">
                                <div id="carouselExampleIndicators" class="carousel slide sombra" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid" src="/rs/img/SlideGalhetas.jpg" alt="Mirante das Galhetas">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2>Mirante das Galhetas</h2>
                                                <p>Com aproximadamente 60 metros de altura. Possui uma das vistas mais paradis&iacute;acas de Guaruj&aacute;.</p>
                                                <p><a class='btn btn-info' role='button' aria-pressed='true' href='/mirantes/showmirante.php?id=32&nm=Galhetas'>Veja Mais</a></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid" src="/rs/img/SlideTombo.jpg" alt="Praia do Tombo">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2>Praia do Tombo</h2>
                                                <p>A praia &eacute; palco de campeonatos de surf de n&iacute;vel internacional e local preferido para treino de profissionais do esporte.</p>
                                                <p><a class='btn btn-info' role='button' aria-pressed='true' href='/praias/showpraia.php?id=11&nm=Tombo'>Veja Mais</a></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid" src="/rs/img/SlideAsturias.jpg" alt="Praia das Ast&uacute;rias">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2>Ast&uacute;rias</h2>
                                                <p>Praia badalada, bonita e boa para banho.</p>
                                                <p><a class='btn btn-info' role='button' aria-pressed='true' href='/praias/showpraia.php?id=12&nm=Asturias'>Veja Mais</a></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid" src="/rs/img/SlideEnseada.jpg" alt="Praia da Enseada">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2>Enseada</h2>
                                                <p>Praia onde h&aacute; a maior concentra&ccedil;&atilde;o de hot&eacute;is e pousadas da cidade e importantes eventos esportivos s&atilde;o realizados no agito do ver&atilde;o.</p>
                                                <p><a class='btn btn-info' role='button' aria-pressed='true' href='/praias/showpraia.php?id=14&nm=Enseada'>Veja Mais</a></p>
                                            </div>
                                        </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Pr&oacute;ximo</span>
                                    </a>
                                </div>                    
                            </div>
                        </div>
                        </div>
                        <div class="row align-items-center">
                            <hr>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="card h-100 sombra">
                                    <div class="card-header">
                                        <h2 style="font-family: 'Salsa', cursive;color:#FA824C;text-align:center;font-weight:lighter;">Praias do Guaruj&aacute;</h2>
                                    </div>                            
                                    <img class="card-img-top" src="rs/img/PraiaSacodoMajor.jpg" alt="Praia do Saco do Major">
                                    <div class="card-body">
                                        <!--<h4 class="card-title">Sta</h4>-->
                                        <p class="card-text">Guaruj&aacute; possui mais de 22km de praias de beleza inigual&aacute;vel, de incr&iacute;vel brancura e de excelente balneabilidade o ano todo.</p>
                                        <a href="/praias/" class="btn btn-primary">Veja mais</a>
                                    </div>
                                </div>                        
                            </div>
                            <div class="col-md-3">
                                <div class="card h-100 sombra">
                                    <div class="card-header">
                                        <h2 style="font-family: 'Salsa', cursive;color:#342E37;text-align:center;">Compras</h2>
                                    </div>                            
                                    <img class="card-img-top" src="rs/img/ShoppingRussi.jpg" alt="Shopping Russi">
                                    <div class="card-body">
                                        <p class="card-text">Os Shoppings e as feiras de artesanatos da cidade oferecem diversas op&ccedil;&otilde;es de compras para atender todos os tipos de visitantes.</p>
                                        <a href="/compras/" class="btn btn-primary">Veja mais</a>
                                    </div>
                                </div>                        
                            </div>
                            <div class="col-md-3">
                                <div class="card h-100 sombra">
                                    <div class="card-header">
                                        <h2 style="font-family: 'Salsa', cursive;color:#3C91E6;text-align:center;">O que fazer</h2>
                                    </div>                            
                                    <img class="card-img-top" src="rs/img/AquarioAcquaMundo.jpg" alt="Acqua Mundo">
                                    <div class="card-body">
                                        <p class="card-text">Aquario, Teatro, Locais badalados, Atra&ccedil;&otilde;es e Marcos hist&oacute;ricos s&atilde;o algumas das &oacute;timas op&ccedil;&otilde;es de visita na cidade.</p>
                                        <a href="/atrativos/" class="btn btn-primary">Veja mais</a>
                                    </div>
                                </div>                        
                            </div>
                            <div class="col-md-3">
                                <div class="card h-100 sombra">
                                    <div class="card-header">
                                        <h2 style="font-family: 'Salsa', cursive;color:#9FD356;text-align:center;">Vale a Visita</h2>
                                    </div>                            
                                    <img class="card-img-top" src="rs/img/MiranteGavea.jpg" alt="Mirante da Gavea">
                                    <div class="card-body">
                                        <p class="card-text">S&atilde;o seis mirantes com vistas deslumbrantes de nossas praias. Alguns deles s&atilde;o cen&aacute;rios de pousos e decolagens de parapente e tamb&eacute;m para a pratica de rapel.</p>
                                        <a href="/mirantes/" class="btn btn-primary">Veja mais</a>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php
                include('footer.php');
            ?>
        </footer>
    </body>
</html>