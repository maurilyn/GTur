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
                                                <h2>Tombo</h2>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="rs/img/SlideAsturias.jpg" class="img-fluid" alt="Praia das Astúrias">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2>Ast&uacute;rias</h2>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="rs/img/SlideEnseada.jpg" class="img-fluid" alt="Praia da Enseada">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2>Enseada</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Próximo</span>
                                    </a>
                                </div>                    
                            </div>
                            <div class="col-md-5">
                                <iframe class="sombra" width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyASyT70pbnOqbTVWFnMG17yDFzw_kWZXNo&q=Guarujá+SP" allowfullscreen></iframe>
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
                                    <img class="card-img-top" src="rs/img/ShoppingJequiti.jpg" alt="La Plage">
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
                                        <a href="#" class="btn btn-primary">Veja mais</a>
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