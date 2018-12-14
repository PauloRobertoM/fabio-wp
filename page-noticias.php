<?php get_header(); ?>

    <?php
        $args = array (
            'post_status'            => 'publish',
            'pagination'             => true,
            'posts_per_page'         => '10',
        );
        $posts = new WP_Query( $args );
    ?>

    <section class="titulo-interno">
        <div class="container">
            <a href="index.php"><i class="fa fa-angle-left" aria-hidden="true"></i> Notícias</a>
        </div><!-- container -->
    </section><!-- titulo-interno -->

    <section class="interna noticia-listagem">
        <div class="container">
            <div class="row">
                <?php if ( $posts->have_posts() ) : ?>
                    <?php $count = 1; while ( $posts->have_posts() ) : $posts->the_post(); ?>
                        <?php $mes = ucfirst(get_the_date('F')); ?>
                        <?php $dia = get_the_date('d'); ?>
                        <?php $ano = get_the_date('Y'); ?>
                        <div class="col-md-4 col-sm-4">
                            <a href="<?php the_permalink() ?>" class="">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(''); ?>
                                <?php endif; ?>
                            </a>
                            <div class="conteudo">
                                <a href="<?php the_permalink() ?>" class="">
                                    <h2><?php the_title(); ?></h2>
                                    <span><?php echo "{$dia} {$mes}"; ?></span>
                                </a>
                                <a href=""><i class="fa fa-share" aria-hidden="true"></i></a>
                            </div><!-- conteudo -->
                            <div class="borda"></div>
                        </div><!-- md-4 -->
                    <?php $count++; endwhile; ?>
                <?php endif; ?>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- interna -->

<?php get_footer(); ?>
