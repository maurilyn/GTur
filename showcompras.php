<!doctype html>
<html lang="pt-br">
    <head>
        <?php
            include('meta.php');
            
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $idlocal = ( isset($_POST['idlocal']) ) ? $_POST['idlocal'] : null;
            } else {
                header('Location: mirantes.php');
            }


            $query = "SELECT * FROM `local` JOIN `tipo` ON `local`.`idtipo`=`tipo`.`idtipo` WHERE `idlocal` = $idlocal";
            $res = mysqli_query($con, $query);
            $r = mysqli_fetch_assoc($res);

        ?>
        <title><?=$r[nmtipo]?> <?=$r[nmlocal]?> | Compras | GuaruTur | Turismo Guaruj&aacute;</title>
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
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="/compras.php"><img src="https://png.icons8.com/ios-glyphs/24/000000/shopping-bag.png"> Compras</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?=$r[nmtipo]?> <?=$r[nmlocal]?></li>
                            </ol>
                        </nav>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <h1><?=$r[nmtipo]?> <?=$r[nmlocal]?> <img src="https://png.icons8.com/ios-glyphs/48/000000/shopping-bag.png"></h1>
                                <?php
                                    if($r[dsfoto] != NULL){
                                ?>
                                <img src="rs/img/<?=$r[dsfoto]?>" class="img-fluid" alt="<?=$r[nmlocal]?>">
                                <?php
                                    } else {
                                ?>
                                <img src="rs/img/nopicture.png" class="img-fluid" width="200" alt="Sem foto por enquanto"><br>
                                <?php
                                    }
                                ?>
                                <p>&nbsp;</p>
                                <p style="text-indent: 1.5em;"><?=$r[dslocal]?></p>
                                <p>&nbsp;</p>
                                <h4><img src="https://png.icons8.com/ios/28/000000/open-sign.png"> Hor&aacute;rio de Funcionamento:</h4>
                                <p><?=$r[dshorario]?></p>
                                <p>&nbsp;</p>
                                <h4><img src="https://png.icons8.com/win10/28/handshake.png" title="Handshake" width="24" height="24"> Facilidades:</h4>
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
                                                <span class='badge badge-primary'>Alimenta&ccedil;&atilde;o</span>
                                                </h5>";
                                        }
                                        if($r[icacessibilidade] == 1){
                                            echo "<h5><img src='https://png.icons8.com/assistive-technology/ios7/50/000000' alt='Acessibilidade'>
                                                <span class='badge badge-primary'>Acessibilidade</span>
                                                </h5>";
                                        }
                                    ?>
                                <p>&nbsp;</p>
                                <?php
                                    if($r[dssite] != NULL){
                                ?>
                                <h4><img src="https://png.icons8.com/ios/28/000000/internet.png"> Site:</h4>
                                <a href="http://<?=$r[dssite]?>" target="_new"><?=$r[dssite]?></a>
                                <p>&nbsp;</p>
                                <?php
                                    }
                                ?>
                                <h4><img src="https://png.icons8.com/place-marker/ios7/24/000000"> Localiza&ccedil;&atilde;o:</h4>
                                <iframe class="sombra" width="100%" height="600" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?key=AIzaSyASyT70pbnOqbTVWFnMG17yDFzw_kWZXNo&center=<?=$r[dslat]?>,<?=$r[dslong]?>&zoom=19</iframe>&maptype=satellite" allowfullscreen></iframe>
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
                include('footer.php');
            ?>
        </footer>
    </body>
</html>