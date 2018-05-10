<!doctype html>
<html lang="pt-br">
    <head>
        <?php
            include('../meta.php');
        ?>
        <title>Contato | Sobre | GuaruTur | Turismo Guaruj&aacute;</title>
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
                                <li class="breadcrumb-item active" aria-current="page"><img src="https://png.icons8.com/metro/24/000000/speech-bubble.png"> Contato</li>
                            </ol>
                        </nav>
                        <div class="row">
                            <div class="col-md-5 offset-md-1">
                                <h1><img src="https://png.icons8.com/metro/48/000000/speech-bubble.png"> Contato</h1>
                                <hr>
                                <form method="post" action="_mail.php" type="text/plain">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required />                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="tel" id="tel" placeholder="Telefone" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="mensagem" id="mensagem" rows="3" placeholder="Mensagem"></textarea>
                                    </div>
                                    <input type="submit" value="Enviar"/>
                                </form>
                            </div>
                            <div class="col-md-5">
                                <h1><img src="https://png.icons8.com/metro/48/000000/about.png"> Sobre</h1>
                                <hr>
                                <p>GuaruTur faz parte da divis&atilde;o de Turismo da GT Company.</p>
                                <p>Utilizamos como base o <a href="http://www.etecsantosdumont.com.br/inventario-turistico-de-guaruja/" target="inventario">Invent&aacute;rio Turistico do Guaruj&aacute;</a>. Desenvolvido por alunos e professores da <a href="http://www.etecsantosdumont.com.br/" target="etec">ETEC Alberto Santos Dumont</a> </p>
                            </div>
                        </div>
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