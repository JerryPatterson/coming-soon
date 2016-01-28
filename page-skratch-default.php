<?php
/*
Template Name: Skratch No Title Page
*/
?>

<?php get_header() ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="twelve columns">
	        <?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>
				<article>
					<?php the_content(); ?>
					<hr>
				</article>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer() ?>