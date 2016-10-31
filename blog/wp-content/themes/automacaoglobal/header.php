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
</head>
<body>
<div id="corpo">
    <div id="header">
        <div class="contHeader">
            <a class="page-scroll" href="http://www.idealhub.com.br">
                <h1 title="<?php bloginfo('name'); ?>" ></h1>
            </a>
            <!--<h2><?php bloginfo('description'); ?></h2>-->
            <ul id="nav">
                <?//php wp_list_cats('sort_column=name'); ?>

                    <li>
                        <a class="page-scroll" href="http://www.idealhub.com.br#services">Recursos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://www.idealhub.com.br#portfolio">Marketplaces</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://www.idealhub.com.br#about">Como Funciona</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://www.idealhub.com.br#contact" onClick="_gaq.push(['_trackEvent', 'Fale Conosco', 'Click', 'Fale Conosco Menu']);">Fale Conosco</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://www.idealhub.com.br/blog">Blog</a>
                    </li>
            </ul>
            <!--<div class="itensTopo">
            	<div class="busca">
                    <?php get_search_form(); ?>   
                </div> 
            	<div class="linkLoja"><a href="http://www.idealhub.com.br/" targer="blank">Site</a></div>
            	<ul class="redesSociais">
            		<li class="redeFace"><a href="#"></a></li>
            		<li class="redeTwitter"><a href="#"></a></li>
            		<li class="redeGmais"><a href="#"></a></li>
            		<li class="redeInsta"><a href="#"></a></li>
            	</ul>
            </div>-->
        </div>
        <?
        if(!$param[0] || $param[0] == ''){
        ?>
            <div class="bannerTopo">
                <?php if ( function_exists( 'easingslider' ) ) { easingslider( 54 ); } ?>
            </div>
        <?
        }
        ?>
    </div>