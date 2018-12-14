<?php get_header(); ?>

   <?php
      $args = array(
         'posts_per_page'   => 30,
         'post_type'        => 'videos',
      );
      $videos = get_posts($args);
   ?>

   <section class="titulo-interno">
        <div class="container">
            <a href="index.php"><i class="fa fa-angle-left" aria-hidden="true"></i> Vídeos</a>
        </div><!-- container -->
    </section><!-- titulo-interno -->

    <section class="interna videos">
        <div class="container">
            <div class="row">
                <?php foreach ($videos as $video) : ?>
                    <div class="col-md-3 col-sm-3">
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
                    </div><!-- md-3 -->
                <?php endforeach; ?>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- interna -->

<?php get_footer(); ?>