<?php 
/*

Template Name: Aux

*/
?>

<?php get_header() ?>

<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="twelve columns text-center">
				<?php the_title(); ?>
			</div>
		</div>
	</div>
</section>
<section class="page-content">
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
</section>

<?php get_footer() ?>