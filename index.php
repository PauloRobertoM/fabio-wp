<?php get_header(); ?>

    <?php
        $page = 'home';
    ?>

    <?php include 'components/vitrine.php'; ?>

    <section class="noticias">
        <div class="container">
            <div class="titulo">
                <h2>Notícias</h2>
            </div><!-- titulo -->

            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- <div class="col-md-4 col-sm-4"> -->
                        <a href="<?php the_permalink() ?>" class="">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(''); ?>
                            <?php endif; ?>
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo excerpt(115, get_the_excerpt()); ?></p>
                            <a href="<?php the_permalink() ?>" class="">VER MAIS</a>
                        </a>
                        <div class="borda"></div>
                    <!-- </div> --><!-- md-4 -->

                    <?php
                        $args = array(
                            'posts_per_page' => 20,
                            'post_type'      => 'projetos',
                        );
                        $projetos = get_posts($args);
                    ?>

                    <?php foreach ($projetos as $projeto) : ?>
                        <h4><?= $projeto->post_title ?></h4>
                        <p><?= $projeto->post_content ?></p>
                    <?php endforeach; ?>

                <?php endwhile; endif; ?>  
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- noticias -->

    <section class="app-infoleg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="item">
                        <div>
                            <h2>Aplicativo<br /><span>Infoleg</span></h2>
                            <p>Quer saber tudo sobre o meu mandato na palama da sua mão</p>
                            <p>Baixe aqui o APP</p>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/store1.png" alt=""></a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/store2.png" alt=""></a>
                        </div>
                    </div>
                </div><!-- xs-6 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/app.jpg" alt="" class="img-app">
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- app-infoleg -->

    <section class="galeria">
        <div class="container">
            <div class="titulo">
                <h2>Instagram</h2>
            </div><!-- titulo -->

        </div><!-- container -->
    </section><!-- galeria -->

    <section class="projetos" id="anc-porjetos">
        <div class="container">
            <div class="titulo">
                <h2>Projetos e Realizações</h2>
            </div><!-- titulo -->
            <div class="row">
                <?php
                    $args = array(
                        'posts_per_page' => 20,
                        'post_type'      => 'projetos',
                    );
                    $projetos = get_posts($args);
                ?>

                <?php foreach ($projetos as $projeto) : ?>
                    <div class="col-md-3 col-sm-3">
                        <div class="item">
                            <a data-toggle="modal" data-target="#myModal_<?= $projeto->ID ?>">
                                <h4><?= $projeto->post_title ?></h4>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div><!-- item -->
                    </div><!-- md-3 -->

                    <div class="modal fade" id="myModal_<?= $projeto->ID ?>" tabindex="-1" role="dialog" aria-labelledby="myModal_<?= $projeto->ID ?>Label">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><?= $projeto->post_title ?></h4>
                                </div>
                                <div class="modal-body">
                                    <p><?= $projeto->post_content ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- projetos -->

    <section class="videos">
        <div class="container">
            <div class="titulo">
                <h2>Vídeos</h2>
            </div><!-- titulo -->
        </div><!-- container -->
        <div class="owl-carousel owl-theme" id="owl-video">
            <?php
                $args = array(
                    'posts_per_page' => 20,
                    'post_type'      => 'videos',
                );
                $videos = get_posts($args);
            ?>

            <?php foreach ($videos as $video) : ?>
                <div class="item">
                    <a href="<?= $video->videos_link ?>" target="_blank">
                        <?php
                            $foto_videos = rwmb_meta('videos_foto', 'type=plupload_image', $video->ID);
                            foreach ( $foto_videos as $foto_video ) {
                                echo "<img src='{$foto_video['url']}' class='img-videos' alt='{$foto_video['alt']}' />";
                            }
                        ?>
                        <div class="play">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/play.png" alt="">
                        </div><!-- play -->
                        <h4><?= $video->post_title ?></h4>
                    </a>
                </div><!-- item -->
            <?php endforeach; ?>
        </div><!-- #owl-video -->
    </section><!-- videos -->

<?php get_footer(); ?>