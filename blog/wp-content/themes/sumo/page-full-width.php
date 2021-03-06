<?php

/**

 * Template Name: Full-width, No Sidebar

 *

 */



remove_action( 'omega_after_main', 'omega_primary_sidebar' );



get_header(); ?>



	<main  class="<?php echo omega_apply_atomic( 'main_class', 'content' );?>" <?php omega_attr( 'content' ); ?>>



		<?php 

		do_action( 'omega_before_content' ); 



		do_action( 'omega_content' ); 



		do_action( 'omega_after_content' ); 

		?>



	</main><!-- .content -->

<!-- Google Code for Remarketing Tag blog-->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 922620963;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/922620963/?value=0&amp;guid=ON&amp;script=0"/></div></noscript>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-72776162-1', 'auto');
  ga('send', 'pageview');
</script>

<?php get_footer(); ?>