<?php get_header(); ?>
    <div class="container" style="margin-top: 5%;">
        <div class="contConteudo col-sm-12">
            <div id="artigos">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="artigo">
                        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                        <div class="postado">
                            <!--Postado por <?php the_author() ?> em --><span><?php the_time('F / Y') ?></span><!--- <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?>-->
                        </div>
                        <p><?php the_content(); ?></p>
                    </div>
                    <?php comments_template(); ?>
                <?php endwhile; else: ?>
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