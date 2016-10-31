<?php get_header(); ?>
    <div id="conteudo">
        <div class="contConteudo">
            <div id="artigos">
                <h4 class="tituloHome">Últimas Publicações</h4>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="artigo">
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
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>