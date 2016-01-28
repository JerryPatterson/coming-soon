<?php get_header() ?>

<!-- home.php -->

	<header>
		<div class="container">
			<div class="row">
				<div class="twelve columns text-center">
					<h1><?php wp_title(' '); ?></h1>
					<h5><?php echo date('l, F jS'); ?></h5>
					<hr>
				</div>
			</div>
		</div>
	</header>
	<section>	
		<div class="container">
			<div class="row">
				<div class="ten offset-by-one columns blog-main">
			    	<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>
					<article>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<p>
							<small>Posted on:  
					     <b><?php the_time(' F j, Y') ?> </b>  |  <b><?php the_category(', ') ?></b>
					   </small>
						</p>
						<a class="blog-image" href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) { 
						  the_post_thumbnail(); 
							} 
							?>
					  </a>
					  <?php the_content( 'read more...' ); ?>
					  <hr>
					</article>
						<?php endwhile; endif; ?>
<p class="pagination">
<span class="u-pull-right"><?php next_posts_link( 'Older posts <span>&#8594;</span>' ); ?></span>
<span class="u-pull-left"><?php previous_posts_link( '<span>&#8592;</span> Newer posts' ); ?></span>
</p>
	 			</div>
	 		</div>
		</div>
	</section>
<?php get_footer() ?>