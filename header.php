<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo( 'name') ?><?php wp_title('|', true, 'left'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!-- Mobile Menu -->
	<div class="mobile-nav show-mobile">
		<div class="container">
		  <div class="row">
		  	<div class="twelve columns">
		    	<a href="<?php bloginfo('url'); ?>" class="u-pull-left"><h2><?php bloginfo( 'name') ?></h2></a>

<!-- Sidr Menu --> 
					<!-- <a id="right-menu" class="u-pull-right" href="#right-menu"><i class="fa fa-bars fa-2x"></i></a>
		      <div id="sidr-right" class="sidr right">
		        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		      </div> -->
<!-- End Sidr Menu --> 

<!-- Fade Menu --> 		      
		   		<a id="mobile-menu-btn" class="u-pull-right" href="#fade-menu"><span></span></a>
		      <div id="mobile-menu" class="menu-target" style="display:none">
		        	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		      </div>
<!-- End Fade Menu --> 

		    </div>
		  </div>
		</div>
	</div>

	<!-- Desktop nav hiding header -->
	<div class="show-desktop">
		<div id="header" class="navbar">
				<div class="container">
			  	<div class="row">
			  	<a href="/" ><img src="#" class="logo"></a>
			  		<div class="twelve columns">
			  			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
						</div>
	    		</div>
	    	</div>
		</div>
	</div>
<!--Header container-->