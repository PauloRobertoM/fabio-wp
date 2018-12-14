<?php get_header(); ?>

   <section class="titulo-interno">
      <div class="container">
         <a href="index.php"><i class="fa fa-angle-left" aria-hidden="true"></i> <?php the_title(); ?></a>
      </div><!-- container -->
   </section><!-- titulo-interno -->

   <section class="interna noticia-interna">
      <div class="container">
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
               <?php the_post_thumbnail('responsive-img responsive-img'); ?>
            <?php endif; ?>
            <p><?php the_content(); ?></p>
         <?php endwhile; else : ?>
            <p><?php _e( 'Nenhum post cadastrado até o momento' ); ?></p>
         <?php endif; ?>
      </div><!-- container -->
   </section><!-- interna -->

<?php get_footer(); ?>