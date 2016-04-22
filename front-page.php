<?php get_header('comingsoon') ?>


<div class="landing-content">
	<div class="container">
		<div class="row">
 			 <div class="eight offset-by-two columns text-center">
 			 	<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>
 			  	<?php
 			  		if ( has_post_thumbnail() ) {
 			  			the_post_thumbnail();
 			  		}
			  		?>
      		<?php the_content(); ?>
        <?php endwhile; endif; ?>
 			</div>
  	</div>
	</div>
</div>

<?php get_footer('comingsoon') ?>