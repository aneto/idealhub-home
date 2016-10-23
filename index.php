<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aumente suas vendas com os maiores marketplaces do mercado. A integração ideal para a sua plataforma e-commerce utiliza tecnologia de ponta para suportar grandes volumes de dados.">
    <meta name="author" content="iDeal HUB">

    <title>iDeal HUB - Integrador Marketplace - B2W, Walmart, Extra, Mercado Livre</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

    </script>>

</body>

</html>
