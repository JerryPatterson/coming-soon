
<?php get_header() ?>

	<header>
		<div class="container">
			<div class="row">
				<div class="twelve columns text-center">
					<h1><?php the_title(); ?></h1>
					<hr>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="container">
			<div class="row">
				<div class="ten offset-by-one columns">
						<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>
				  <article>
				  	<?php the_content(); ?>
				  	<hr>
					</article>
		 		    <?php endwhile; endif; ?>
	 		  </div>
	 		</div>
	 	<div>
	</section>
<?php get_footer() ?>