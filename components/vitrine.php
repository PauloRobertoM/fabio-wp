<?php
	$args = array(
		'posts_per_page'   => 5,
		'post_type'        => 'vitrines',
	);

	$vitrines = get_posts($args);
?>
	
<section class="vitrine">
	<div class="owl-carousel owl-theme" id="owl-vitrine">
		<?php foreach ($vitrines as $vitrine) : ?>
			<div class="item">
				<?php
		        	$vitrine_desktops = rwmb_meta('vitrines_foto_desktop', 'type=plupload_image', $vitrine->ID);
		        	$vitrine_mobiles = rwmb_meta('vitrines_foto_mobile', 'type=plupload_image', $vitrine->ID);
		        	foreach ( $vitrine_desktops as $vitrine_desktop ) {
		        		echo "<img src='{$vitrine_desktop['url']}' class='hidden-xs' alt='{$vitrine_desktop['alt']}' />";
		        	}
		        	foreach ( $vitrine_mobiles as $vitrine_mobile ) {
		        		echo "<img src='{$vitrine_mobile['url']}' class='visible-xs' alt='{$vitrine_mobile['alt']}' />";
		        	}
	        	?>
			</div><!-- item -->
		<?php endforeach; ?>
	</div><!-- #owl-vitrine -->
</section><!-- vitrine -->