<!doctype html>
<html lang="pt-br">
    <head>
        <?php
            include('../meta.php');

            $query = "SELECT * FROM `local` JOIN `tipo` ON `local`.`idtipo`=`tipo`.`idtipo` WHERE `local`.`idtipo` = 7 OR `local`.`idtipo` = 8 ORDER BY `tipo`.`nmtipo`";
            $res = mysqli_query($con, $query);

            function limit_text($text, $limit) {
                if (str_word_count($text, 0) > $limit) {
                    $words = str_word_count($text, 2);
                    $pos = array_keys($words);
                    $text = substr($text, 0, $pos[$limit]) . '...';
                }
                return $text;
            }

        ?>
        <title>Compras | GuaruTur | Turismo Guaruj&aacute;</title>
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
                                <li class="breadcrumb-item active" aria-current="page"><img src="https://png.icons8.com/ios-glyphs/24/000000/shopping-bag.png"> Compras</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h1><img src="https://png.icons8.com/ios-glyphs/48/000000/shopping-bag.png"> Compras em Guaruj&aacute;</h1>
                            </div>
                        </div>
                        <?php
                            while($r = mysqli_fetch_assoc($res)){
                                    if($r[dsfoto] != NULL){
                                        $foto = $r[dsfoto];
                                    } else {
                                        $foto = "nopicture.png";
                                    }
                                echo "
                                    <div class='row'>
                                        <div class='col-md-3 offset-md-1'>
                                            <a href='showcompras.php?id=" . $r[idlocal] . "&nm=" . $r[nmlocal] . "'>
                                                <img src='/rs/img/" . $foto . "' class='rounded img-thumbnail' alt=" . $r[nmlocal] . ">
                                            </a>
                                        </div>
                                        <div class='col-md-7'>
                                            <h5 style='font-family: Handlee, cursive;font-weight:bolder;'>
                                                " . $r[nmtipo] . " " . $r[nmlocal] . "<br>
                                                <small class='text-muted'>" . $r[dshorario] . "</small>
                                            </h5>
                                            <p>" . limit_text($r[dslocal], 80) . "</p>
                                            <p><a class='btn btn-outline-info' role='button' aria-pressed='true' href='showcompras.php?id=" . $r[idlocal] . "&nm=" . $r[nmlocal] . "'>Veja Mais</a></p>
                                        </div>
                                    </div>
                                    <hr>
                                ";
                            }
                        ?>
                        <div class="row">
                            <hr>
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