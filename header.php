<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo( 'name') ?><?php wp_title('|', true, 'left'); ?></title>
  <link rel="icon" type="image/png" href="http://www.skratch.1.dev/wp-content/uploads/2015/05/transparent-favicon-from-scratch.png">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68577376-1', 'auto');
  ga('send', 'pageview');

</script>

  <?php wp_head(); ?>

</head>
<body>
		<!-- Mobile slideout menu -->
			<div class="mobile-nav">
			<div class="container">
			  <div class="row">
			  	<div class="twelve columns">
			      <a href="<?php bloginfo('url'); ?>"><h2><?php bloginfo( 'name') ?></h2></a>
			    	<a id="right-menu" class="u-pull-right" href="#right-menu"><i class="fa fa-bars fa-2x"></i></a>
			      <div id="sidr-right" class="sidr right">
			        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			      </div>
			    </div>
			  </div><!-- row -->
			</div><!-- container -->
			</div><!-- End mobile menu -->
			<!-- Desktop nav hiding header -->
			<div class="desktop-nav">
				<div id="header" class="navbar header fixed">
					<div class="page-landing">
						<div class="container">
					  	<div class="row">
					  		<div class="twelve columns">
					  			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
								</div>
			    		</div>
			    	</div>
			    </div>
				</div>
			</div>