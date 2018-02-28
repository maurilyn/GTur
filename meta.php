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
<meta name="description" content="GuaruTur, o mais completo site de informa&ccedil;&otilde;es tur&iacute;sticas de Guaruj&aacute; - SP. Famosa pelas suas belezas naturais, praias que cercam a regi&atilde;o e por seu potencial tur&iacute;stico, &eacute; considerada uma das cidades mais bonitas do litoral, conhecida tamb&eacute;m como P&eacute;rola do Atl&acirc;ntico. Mirantes, trilhas e Marcos hist&oacute;ricos da cidade de Guaruj&aacute; - SP. Localize os melhores locais para compras e entretenimento em Guaruj&aacute; - SP" />
<meta name="keywords" content="Guaruj&aacute;, Turismo, Praia, Trilha, Mirante, Atrativos, Compras, Roteiros"/>


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

<link href="https://fonts.googleapis.com/css?family=Aclonica|Acme|Handlee|Josefin+Sans|Kaushan+Script|Salsa" rel="stylesheet">

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
