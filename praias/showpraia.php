<!doctype html>
<html lang="pt-br">
    <head>
        <?php
            include('../meta.php');
            
            if($_SERVER['REQUEST_METHOD'] === 'GET'){
                $id = ( isset($_GET['id']) ) ? $_GET['id'] : null;
            } else {
                header('Location: index.php');
            }


            $query = "SELECT * FROM `local` WHERE `idtipo` = 1 AND `idlocal` = $id";
            $res = mysqli_query($con, $query);
            $r = mysqli_fetch_assoc($res);
            
            if($r == null){
                header('Location: index.php');
            }
            
        ?>
        <title><?=$r[nmlocal]?> | Praia | GuaruTur | Turismo Guaruj&aacute;</title>
    </head>
    <body>
        <menu>
            <?php
                include('../menu.php');
            ?>
        </menu>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <hr>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><img src="https://png.icons8.com/ios-glyphs/24/000000/cottage.png"> Inicio</a></li>
                                <li class="breadcrumb-item"><a href="/praias/"><img src="https://png.icons8.com/beach/androidL/24/000000"> Praias</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?=$r[nmlocal]?></li>
                            </ol>
                        </nav>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <h1><?=$r[nmlocal]?> <img src="https://png.icons8.com/beach/androidL/48/000000"></h1>
                                <img src="/rs/img/<?=$r[dsfoto]?>" class="img-fluid" alt="<?=$r[nmlocal]?>">
                                <span class="badge badge-light"><?=$r[nmlocal]?> tem <?=$r[dsextensao]?> metros de comprimento.</span>
                                <p>&nbsp;</p>
                                <p style="text-indent: 1.5em;"><?=$r[dslocal]?></p>
                                <p>&nbsp;</p>
                                <h4><img src="https://png.icons8.com/enter/ios7/24/000000"> Acesso: <small class="text-muted"><?=$r[dshorario]?></small></h4>
                                <p>&nbsp;</p>
                                <h4><img src="https://png.icons8.com/win10/24/handshake.png" title="Handshake" width="24" height="24"> Facilidades:</h4>
                                    <?php
                                        if($r[icestacionamento] == 1){
                                            echo "<h5><img src='https://png.icons8.com/estacionamento/ios7/50/000000' alt='Estacionamento'> 
                                                <span class='badge badge-primary'>Estacionamento</span>
                                                </h5>";
                                        }
                                        if($r[icsanitarios] == 1){
                                            echo "<h5><img src='https://png.icons8.com/toilet/Dusk_Wired/50/000000' alt='Sanit&aacute;rios'>
                                                <span class='badge badge-primary'>Sanit&aacute;rios</span>
                                                </h5>";
                                        }
                                        if($r[icalimentacao] == 1){
                                            echo "<h5><img src='https://png.icons8.com/comida/ios7/50/000000' alt='Alimenta&ccedil;&atilde;o Próxima'>
                                                <span class='badge badge-primary'>Alimenta&ccedil;&atilde;o Pr&oacute;xima</span>
                                                </h5>";
                                        }
                                        if($r[icacessibilidade] == 1){
                                            echo "<h5><img src='https://png.icons8.com/assistive-technology/ios7/50/000000' alt='Acessibilidade'>
                                                <span class='badge badge-primary'>Acessibilidade</span>
                                                </h5>";
                                        }
                                        if($r[dsextensao]>5000){
                                            $zoom = 14;
                                        } elseif($r[dsextensao]>2000){
                                            $zoom = 15;
                                        } elseif($r[dsextensao]>700){
                                            $zoom = 16;
                                        } elseif($r[dsextensao]>100){
                                            $zoom = 18;
                                        } else {
                                            $zoom = 19;
                                        }
                                    ?>
                                    <p>&nbsp;</p>
                                <h4><img src="https://png.icons8.com/place-marker/ios7/24/000000"> Localiza&ccedil;&atilde;o:</h4>
                                <iframe class="sombra" width="100%" height="600" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?key=AIzaSyASyT70pbnOqbTVWFnMG17yDFzw_kWZXNo&center=<?=$r[dslat]?>,<?=$r[dslong]?>&zoom=<?=$zoom?></iframe>&maptype=satellite" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-8 offset-md-2">
                                <h6>Guaruj&aacute; - SP - Brasil</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php
                include('../footer.php');
            ?>
        </footer>
    </body>
</html>