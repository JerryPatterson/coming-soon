<?php get_header('page') ?>

<!--index.php-->
<p>index.php</p>
	
	<header>
		<div class="container">
			<div class="row">
				<div class="twelve columns text-center">
					 <h1 class=><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
  </header>
	<section>
	 <div class="container">
		<div class="row">
		  <div class="eight offset-by-two columns">
	      <?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
	      <article>
				  <h1><?php the_title(); ?></h1>
					<?php the_content( 'Continue...' ); ?>
	      </article>
	  			<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer() ?>

<?php get_header('page') ?>
