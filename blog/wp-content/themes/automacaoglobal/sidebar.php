<div id="sidebar">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?><?php endif; ?>
   <!-- <div class="widget">
	    <h3>INSTAGRAM</h3>
	    <?echo do_shortcode('[instagram-feed]');?>
	</div> -->


	
	<div class="widget">
	    <h3>MAIS DICAS</h3>
	    <?php if ( function_exists( 'easingslider' ) ) { easingslider( 57 ); } ?>
	</div>


</div>