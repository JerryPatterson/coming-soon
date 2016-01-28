<?php get_header('page') ?>

<!-- archive.php override with category.php, tag.php-->

	<header>
		<div class="container">
			<div class="row">
				<div class="twelve columns text-center">
					<h1><?php the_title(' '); ?> Posts</h1>
				</div>
			</div>
		</div>
	</header>


	<section>
		<div class="container">
			<div class="row">
				<div class="ten offset-by-one columns heading">
						<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>
					<article>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php the_content(); ?>
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