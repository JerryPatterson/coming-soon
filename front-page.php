<?php get_header('landing') ?>


<div class="landing-content">
	<div class="container">
		<div class="row">
   			 <div class="twelve columns">
   			 	<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
   			 	<article>
   			 		<?php the_content();?> 
   			 	</article>
   			    <?php endwhile; endif; ?>
   			</div>
    	</div>
	</div>

<?php get_footer('landing') ?>