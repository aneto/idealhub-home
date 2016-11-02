<?php get_header(); ?>
    <div id="conteudo">
        <div class="contConteudo">
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
                <div class="tituloDpto"><h2>Arquivo da Categoria "<?php echo single_cat_title(); ?>"</h2><span></span></div>
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <div class="tituloDpto"><h2>Arquivo de <?php the_time('j de F de Y'); ?></h2><span></span></div>
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <div class="tituloDpto"><h2>Arquivo de <?php the_time('F de Y'); ?></h2><span></span></div>
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <div class="tituloDpto"><h2>Arquivo de <?php the_time('Y'); ?></h2><span></span></div>
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <div class="tituloDpto"><h2>Arquivo do Autor</h2><span></span></div>
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <div class="tituloDpto"><h2>Arquivo do Blog</h2><span></span></div>
            <?php } ?>
            <div id="artigos">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="artigo">
                        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <div class="postado">
                            <!--Postado por <?php the_author() ?> em --><span><?php the_time('F / Y') ?></span><!--- <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?>-->
                        </div>
                        <p><?php the_content(); ?></p>
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
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>