<?php ini_set('display_errors','off')?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aumente suas vendas com os maiores marketplaces do mercado. A integração ideal para a sua plataforma e-commerce que suporta grandes volumes de dados.">
    <meta name="author" content="iDeal HUB">
    <meta name="robots" content="ALL" />
    <meta name="keywords" content="marketplace,marketplace hub,market place,integração marketplaces,integrador marketplace,integrando com marketplaces,integrando com marketplace,integração e-commerce marketplace,integrar minha loja com marketplaces,integrar com o marketplace,integração de sistemas,integração de software,integração de Dados,integração,loja virtual,e-commerce,ecommerce,meus produtos no marketplace,enviar produtos para os marketplaces,sincronizar produtos marketplace,os produtos da minha loja no marketplace,hub,submarino,b2w,americanas,extra,mercadolivre,walmart,ponto frio,nova.com,cnova,mercado livre,magento,netshoes,dafiti"/>

    <title>iDeal HUB - Integrador Marketplace - B2W, Walmart, Mercado Livre</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" async>
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link href="css/agency.css" rel="stylesheet">

    <?php include("pages/analytics.php"); ?>
</head>

<body id="page-top" class="index">

    <?php
    include("pages/menu.php");
    include("pages/cabecalho.php");
    include("pages/recursos.php");
    include("pages/marketplaces.php");
    include("pages/sobre.php");
    include("pages/faleConosco.php");
    include("pages/rodape.php");
    include("pages/modals.php");
    ?>

    <!-- jQuery -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

    <script type="text/javascript">

        

            $(document).ready(function () {

                    if(screen.width < 700){
                       $('#myCarousel').hide(); 
                    }
                
                    $('#myCarousel').carousel({
                        interval: 10000
                    })
                    $('.fdi-Carousel .item').each(function () {
                        var boxCount = 1; // change this to how many box you want
                        var next = $(this).next();
                        for(i = 1; i < boxCount; i++) {
                            if (!next.length) {
                                next = $(this).siblings(':first');
                            }
                            next.children(':first-child').clone().appendTo($(this));
                            next = next.next();
                        }
                    });

            });
       

    </script>

</body>

</html>
