<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7893354854807751",
    enable_page_level_ads: true
  });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2153506-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-2153506-11');
</script>

<meta charset="utf-8" >
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="GuaruTur, o mais completo site de informações turísticas de Guarujá - SP. Famosa pelas suas belezas naturais, praias que cercam a região e por seu potencial turístico, é considerada uma das cidades mais bonitas do litoral, conhecida também como Pérola do Atlântico. Mirantes, trilhas e Marcos históricos da cidade de Guarujá - SP. Localize os melhores locais para compras e entretenimento em Guarujá - SP" />
<meta name="keywords" content="Guarujá, Turismo, Praia, Trilha, Mirante, Atrativos, Compras, Roteiros"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">



<?php
    include('con.php');
    header("Content-type: text/html; charset=iso-8859-1");
    
    $fundo = rand(0,3);

    switch ($fundo) {
        case 0:
            $fd = "PraiaConchas.jpg";
            break;
        case 1:
            $fd = "MiranteGalhetas.jpg";
            break;
        case 2:
            $fd = "PraiaMoises.jpg";
            break;
        case 3:
            $fd = "PraiaPereque.jpg";
            break;
    }    
?>

<style> 
.sombra {
    box-shadow: 10px 10px 8px #AAAAAA;
}

.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12{
    background-color:#FFFFFF;
}

body{
    margin-top: 55px;
    background-image:url('rs/img/<?=$fd?>');
    background-attachment:fixed;
    background-repeat:no-repeat;
    background-size:cover;    
}
</style>
