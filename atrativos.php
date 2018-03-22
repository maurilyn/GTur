<!doctype html>
<html lang="pt-br">
    <head>
        <?php
            include('meta.php');

            $tipo = isset($_GET['q']) ? $_GET['q'] : '';

            if($tipo == ''){
                $query = "SELECT * FROM `local` JOIN `tipo` ON `local`.`idtipo`=`tipo`.`idtipo` WHERE `local`.`idtipo` = 3 OR `local`.`idtipo` = 5 OR `local`.`idtipo` = 6 OR `local`.`idtipo` = 9 OR `local`.`idtipo` = 10 ORDER BY `tipo`.`nmtipo`";
            } else {
                $query = "SELECT * FROM `local` JOIN `tipo` ON `local`.`idtipo`=`tipo`.`idtipo` WHERE `local`.`idtipo` = $tipo ORDER BY `tipo`.`nmtipo`";
            }
            
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
        <title>Atrativos | GuaruTur | Turismo Guaruj&aacute;</title>
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
                                <li class="breadcrumb-item"><a href="/"><img src="https://png.icons8.com/ios-glyphs/24/000000/cottage.png"> Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><img src="https://png.icons8.com/ios/24/000000/souvenirs-filled.png"> Atrativos</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <div class="col-md-5 offset-md-1">
                                <h1><img src="https://png.icons8.com/ios/48/000000/souvenirs-filled.png"> Atrativos</h1>
                            </div>
                            <div class="col-md-5">
                                <div class="alert alert-dark text-center" role="alert">
                                    Filtrar por Tipo:
                                    <a href="atrativos.php" class="alert-link">Todos</a> | 
                                    <a href="atrativos.php?q=6" class="alert-link">Aquario</a> |
                                    <a href="atrativos.php?q=10" class="alert-link">Cinema</a> |
                                    <a href="atrativos.php?q=9" class="alert-link">Local</a> |
                                    <a href="atrativos.php?q=3" class="alert-link">Marco</a> | 
                                    <a href="atrativos.php?q=5" class="alert-link">Teatro</a>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <div class="alert alert-info text-center" role="alert">
                                    <input class="form-control" id="filtro-nome" placeholder="Pesquisar" autofocus />
                                </div>
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
                                    <span><p class='sr-only'>" . $r[nmlocal] . "</p>
                                    <div class='row'>
                                        <div class='col-md-3 offset-md-1'>
                                            <img src='rs/img/" . $foto . "' class='rounded img-thumbnail' alt=" . $r[nmlocal] . ">
                                        </div>
                                        <div class='col-md-7'>
                                            <h5 style='font-family: Handlee, cursive;font-weight:bolder;'>
                                                " . $r[nmlocal] . "
                                            </h5>
                                            <p>" . limit_text($r[dslocal], 80) . "</p>
                                            <p><a class='btn btn-outline-info' role='button' aria-pressed='true' href='showatrativo.php?id=" . $r[idlocal] . "&nm=" . $r[nmlocal] . "'>Veja Mais</a></p>
                                        </div>
                                    </div>
                                    <hr>
                                    </span>
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
                include('footer.php');
            ?>
        </footer>
        <script>
            $('#filtro-nome').keyup(function() {
                var nomeFiltro = $(this).val().toLowerCase();
                console.log(nomeFiltro);
                $('body').find('span').each(function() {
                    var conteudoCelula = $(this).find('p:first').text();
                    console.log(conteudoCelula);
                    var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
                    $(this).css('display', corresponde ? '' : 'none');
                });
            });            
        </script>
    </body>
</html>