<?

ini_set('display_errors','off');
$param = preg_replace('\.php(.*)', '\.php', preg_replace(';', '', htmlspecialchars(strip_tags($_SERVER['REQUEST_URI']))));
$param = explode( "/", str_replace( ".php", "", strip_tags( $param ) ) );
array_shift( $param );
if($_SERVER['SERVER_ADDR'] == '192.168.100.120')
    array_shift( $param );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
	
    <!-- Bootstrap Core CSS -->
    <link href="http://www.idealhub.com.br/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://www.idealhub.com.br//vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" async>
    <link href="http://www.idealhub.com.br//css/fonts.css" rel="stylesheet" type="text/css">
    <link href="http://www.idealhub.com.br//css/agency.css" rel="stylesheet">
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-85967705-2', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body class="index">
<div id="corpo">
    <div id="header">
		<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll" >
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand page-scroll" style=" padding-top: 0px;" href="http://www.idealhub.com.br"><h1><img src="http://www.idealhub.com.br/img/site/idealhub.png" style="width: 172px;" alt="iDeal HUB" title="iDeal HUB" /></h1></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="http://www.idealhub.com.br/#services">Recursos</a>
						</li>
						<li>
							<a class="page-scroll" href="http://www.idealhub.com.br/#portfolio">Marketplaces</a>
						</li>
						<li>
							<a class="page-scroll" href="http://www.idealhub.com.br/#about">Como Funciona</a>
						</li>
						<li>
							<a class="page-scroll" href="http://www.idealhub.com.br/#contact" onClick="_gaq.push(['_trackEvent', 'Fale Conosco', 'Click', 'Fale Conosco Menu']);">Fale Conosco</a>
						</li>
						<li>
							<a class="page-scroll" href="http://www.idealhub.com.br/blog">Blog</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	
        
        <?/*
        if(!$param[0] || $param[0] == ''){
        ?>
            <div class="bannerTopo">
                <?php if ( function_exists( 'easingslider' ) ) { easingslider( 54 ); } ?>
            </div>
        <?
        }*/
        ?>
		
    </div>