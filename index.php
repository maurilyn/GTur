<!doctype html>
<html lang="pt-br">
    <head>
        <?php
            include('meta.php');
        ?>
        <title>GuaruTur | Turismo Guaruj&aacute;</title>
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
                        <div class="row">
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="alert alert-light text-center" role="alert">
                                    <h1 style="font-size:30px;">GuaruTur, o mais completo site de informa&ccedil;&otilde;es tur&iacute;sticas de Guaruj&aacute; - SP</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 text-justify">
                                <h2 class="text-center" style="font-size:25px;">Guaruj&aacute; A P&eacute;rola do Atl&acirc;ntico</h2>
                                <p style="text-indent: 1.5em; font-size:15px;">Famosa pelas suas belezas naturais, praias que cercam a regi&atilde;o e por seu potencial tur&iacute;stico, &eacute; considerada uma das cidades mais bonitas do litoral, conhecida tamb&eacute;m como "P&eacute;rola do Atl&acirc;ntico".</p>
                                <p style="text-indent: 1.5em; font-size:15px;">Possui 27 praias de todos os tamanhos, de v&aacute;rias cores, de &aacute;guas limpas e mar aberto, cada uma com sua particularidade, iluminadas pelo sol e sorriso das crian&ccedil;as e dos surfistas. Al&eacute;m disso, uma delas, a Praia do Tombo, &eacute; a &uacute;nica do Brasil a receber o selo internacional Bandeira Azul. Ao longo dos 22 km das praias guarujaenses, voc&ecirc; encontrar&aacute; trilhas selvagens para praias paradis&iacute;acas, como as praias de Cheira-Lim&atilde;o ou Cambur&iacute;, praias bem movimentadas e de beleza sem igual, como as praias da Pitangueiras ou Enseada, praias distantes, pouco frequentadas e de f&aacute;cil acesso, como &eacute;den e Mar Casado.</p>
                                <p style="text-indent: 1.5em; font-size:15px;">Mas Guaruj&aacute; oferece muito mais: Trilhas que contam hist&oacute;ria e emocionam; Mirantes com vista para cen&aacute;rios realmente vibrantes; Ilhas rodeadas por &aacute;guas multicoloridas; Fortes, Fortalezas e Pavilh&otilde;es que fazem sentir a nostalgia do passado e encantam tamb&eacute;m pelos personagens que deixaram pegadas na hist&oacute;ria.</p>
                            </div>
                            <div class="col-md-7">
                                <div id="carouselExampleIndicators" class="carousel slide sombra" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="rs/img/SlideTombo.jpg" class="img-fluid" alt="Praia do Tombo">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2>Praia do Tombo</h2>
                                                <p>A praia &eacute; palco de campeonatos de surf de n&iacute;vel nacional e local preferido para treino de profissionais do esporte.</p>
                                                <form method='post' action='showpraia.php'>
                                                    <input type='hidden' name='idlocal' value='11'>
                                                    <input type='submit' class='btn btn-info' value='Saiba Mais'>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="rs/img/SlideAsturias.jpg" class="img-fluid" alt="Praia das Ast&uacute;rias">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2>Ast&uacute;rias</h2>
                                                <p>Praia badalada, bonita e boa para banho.</p>
                                                <form method='post' action='showpraia.php'>
                                                    <input type='hidden' name='idlocal' value='12'>
                                                    <input type='submit' class='btn btn-info' value='Saiba Mais'>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="rs/img/SlideEnseada.jpg" class="img-fluid" alt="Praia da Enseada">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2>Enseada</h2>
                                                <p>Praia onde h&aacute; a maior concentra&ccedil;&atilde;o de hot&eacute;is e pousadas da cidade e importantes eventos esportivos s&atilde;o realizados no agito do ver&atilde;o.</p>
                                                <form method='post' action='showpraia.php'>
                                                    <input type='hidden' name='idlocal' value='14'>
                                                    <input type='submit' class='btn btn-info' value='Saiba Mais'>
                                                </form>
                                            </div>
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
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="http://amzn.to/2F7sD7s" target="amazon"><img src="rs/img/banner_amazon_cozinha_728x90.jpg"></a>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card h-100 sombra">
                                    <div class="card-header">
                                        <h2 style="color:#FA824C;text-align:center;">Praias do Guaruj&aacute;</h2>
                                    </div>                            
                                    <img class="card-img-top" src="rs/img/PraiaSacodoMajor.jpg" alt="Praia do Saco do Major">
                                    <div class="card-body">
                                        <!--<h4 class="card-title">Sta</h4>-->
                                        <p class="card-text">Guaruj&aacute; possui mais de 22km de praias de beleza inigual&aacute;vel, de incr&iacute;vel brancura e de excelente balneabilidade o ano todo, sendo elogiadas em todo pa&iacute;s, e conhecida em todo o mundo como a P&eacute;rola do Atl&acirc;ntico.</p>
                                        <a href="/praias.php" class="btn btn-primary">Veja mais</a>
                                        </div>
                                </div>                        
                            </div>
                            <div class="col-md-3">
                                <div class="card h-100 sombra">
                                    <div class="card-header">
                                        <h2 style="color:#342E37;text-align:center;">Compras</h2>
                                    </div>                            
                                    <img class="card-img-top" src="rs/img/ShoppingJequiti.jpg" alt="Shopping Jequiti">
                                    <div class="card-body">
                                        <p class="card-text">Os Shoppings e as feiras de artesanatos da cidade oferecem diversas op&ccedil;&otilde;es de compras para atender todos os tipos de pessoas, moradores locais ou visitantes.</p>
                                        <a href="/compras.php" class="btn btn-primary">Veja mais</a>
                                        </div>
                                </div>                        
                            </div>
                            <div class="col-md-3">
                                <div class="card h-100 sombra">
                                    <div class="card-header">
                                        <h2 style="color:#3C91E6;text-align:center;">O que fazer</h2>
                                    </div>                            
                                    <img class="card-img-top" src="rs/img/AquarioAcquaMundo.jpg" alt="Acqua Mundo">
                                    <div class="card-body">
                                        <p class="card-text">Atra&ccedil;&otilde;es e marcos hist&oacute;ricos s&atilde;o algumas das &oacute;timas op&ccedil;&otilde;es de visita na cidade.</p>
                                        <a href="/atrativos.php" class="btn btn-primary">Veja mais</a>
                                        </div>
                                </div>                        
                            </div>
                            <div class="col-md-3">
                                <div class="card h-100 sombra">
                                    <div class="card-header">
                                        <h2 style="color:#9FD356;text-align:center;">Vale a Visita</h2>
                                    </div>                            
                                    <img class="card-img-top" src="rs/img/MiranteTartarugas.jpg" alt="Mirante da Caixa Dagua">
                                    <div class="card-body">
                                        <p class="card-text">S&atilde;o seis mirantes com vistas deslumbrantes de nossas praias. Alguns deles s&atilde;o cen&aacute;rios de pousos e decolagens de parapente e tamb&eacute;m para a pratica de rapel.</p>
                                        <a href="/mirantes.php" class="btn btn-primary">Veja mais</a>
                                        </div>
                                </div>                        
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                        </div>
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