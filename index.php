<?php get_header() ?>


<div class="landing-content">
	<div class="container">
		<div class="row">
 			 <div class="twelve columns text-center">
 			  <img src="http://www.rohithbhat.com/comingsoon.png">
        <p>Coming Soon's new website is currently under construction. Please contact us at <span class="accent">555-555-5555</span> with any questions you may have.</p>
 			</div>
  	</div>
	</div>

  <div class="container landing-form">
    <div class="row">
      <div class="eight offset-by-two columns text-center">
        <?php
          if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>