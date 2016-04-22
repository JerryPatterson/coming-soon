<?php get_header('page') ?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="ten offset-by-one columns">
						<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>
					<article>
						<h1><?php the_title(); ?></a></h1>
						<?php if ( has_post_thumbnail() ) { 
							the_post_thumbnail();
						} 
						?>
						<?php the_content( 'Continue...' ); ?>
						<hr>
					</article>
						<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer() ?>