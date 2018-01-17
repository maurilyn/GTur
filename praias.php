<!doctype html>
<html lang="pt-br">
    <head>
        <?php
            include('meta.php');
            
            $acesso = isset($_GET['q']) ? $_GET['q'] : '';
            
            $query = "SELECT * FROM `local` WHERE `idtipo` = 1 AND `dshorario` LIKE '%$acesso%' ORDER BY `nmlocal`";
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
        <title>Praias de Guaruj&aacute; | GuaruTur | Turismo Guaruj&aacute;</title>
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
                                <li class="breadcrumb-item active" aria-current="page"><img src="https://png.icons8.com/beach/androidL/24/000000"> Praias</li>
                            </ol>
                        </nav>
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-md-1">
                                <h1><img src="https://png.icons8.com/beach/androidL/48/000000"> Praias</h1>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-dark text-center" role="alert">
                                    Filtrar por acesso:
                                    <a href="praias.php" class="alert-link">Todas</a> | 
                                    <a href="praias.php?q=livre" class="alert-link">Livre</a> | 
                                    <a href="praias.php?q=restrito" class="alert-link">Restrito</a> | 
                                    <a href="praias.php?q=trilha" class="alert-link">Trilha</a> | 
                                    <a href="praias.php?q=mar" class="alert-link">Mar</a>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <div class="alert alert-info text-center" role="alert">
                                    <input class="form-control" id="filtro-nome" placeholder="Pesquisar"/>
                                </div>
                            </div>
                        </div>
                        <?php
                            while($r = mysqli_fetch_assoc($res)){
                                echo "
                                    <span><p class='sr-only'>" . $r[nmlocal] . "</p>
                                    <div class='row'>
                                        <div class='col-md-3 offset-md-1'>
                                            <img src='rs/img/" . $r[dsfoto] . "' class='rounded img-thumbnail' alt=" . $r[nmlocal] . ">
                                        </div>
                                        <div class='col-md-7'>
                                            <h5>
                                                " . $r[nmlocal] . "<br>
                                                <small class='text-muted'>Extens&atilde;o: " . $r[dsextensao] . " metros</small>
                                            </h5>
                                            <p>" . limit_text($r[dslocal], 80) . "</p>
                                            <form method='post' action='showpraia.php'>
                                                <input type='hidden' name='idlocal' value='" . $r[idlocal] . "'>
                                                <input type='submit' class='btn btn-outline-info' value='Veja Mais'>
                                            </form>
                                        <hr>
                                        </div>
                                    </div>
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