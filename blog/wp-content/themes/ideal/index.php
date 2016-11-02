<?php get_header(); ?>
<div class="container" style="margin-top: 5%;">

    <div class="blog-header" style="display:none">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main" id="artigos">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="artigo blog-post">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <!--<p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>-->
                    <span class="fotoPost">
                        <a href="<?php the_permalink() ?>">
                            <?php set_post_thumbnail_size( 225, 225);
                            the_post_thumbnail(); ?>
                        </a>
                    </span>
                    <p><?php the_excerpt(); ?></p>
                    <div class="continue">
                        <a href="<?php the_permalink() ?>">Continue Lendo</a>
                        <span><?php the_time('F / Y') ?></span>
                    </div>
                </div>            
            <?php endwhile?>
			
            <div class="navegacao">
                <div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
                <div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
            </div>
			
			<?php else: ?>
				<div class="artigo">
					<h2>Nada Encontrado</h2>
					<p>Erro 404</p>
					<p>Lamentamos mas não foram encontrados artigos.</p>
				</div>            
			<?php endif; ?>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module">
                <?php get_sidebar(); ?>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>