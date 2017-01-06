<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
<?php
if ( is_singular( 'post' ) ) { ?>
		<div id="footer-sidebar" class="widget-area container">
			<?php  dynamic_sidebar( 'footer-sidebar' ); ?>
		</div><!-- #menu-sidebar -->
    <!--send request to subscribe new user -->
    <script type="text/javascript">
        jQuery('#mc-embedded-subscribe').click(function(){
            var email = jQuery('#mce-EMAIL').val();
            var name = jQuery('#mce-FNAME').val();
            //if name empty return false
            if (name.length == 0){
                jQuery('#s_sub_error').html('<div class="mce_inline_error">This field is required.</div>');
                return false;
            }
            //check email validation
            if (email.indexOf('.', 0) == -1 || email.indexOf('@', 0) == -1) {
                return false;
            }
            

            jQuery.ajax({
                type:"POST",
                url: "http://computoolsglobal.com/blog/wp-admin/admin-ajax.php",
                data: {action: "addMailchimp",email:email,name:name},//{newCustomerForm},
                success:function(data){
                    // jQuery("#feedback").html(data);
                    console.log(data);

                }
            });

        });
    </script>

<?php }
?>

	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!--    <div class="site-info container">-->
		<!--        <a href="--><?php //echo esc_url( __( 'http://wordpress.org/', 'sydney' ) ); ?><!--">--><?php //printf( __( 'Proudly powered by %s', 'sydney' ), 'WordPress' ); ?><!--</a>-->
		<!--        <span class="sep"> | </span>-->
		<!--        --><?php //printf( __( 'Theme: %2$s by %1$s.', 'sydney' ), 'aThemes', '<a href="http://athemes.com/theme/sydney" rel="designer">Sydney</a>' ); ?>
		<!--    </div>-->
    <div class="footerMenu">
        <ul>
            <li><a href="/case-studies">case studies</a></li>
            <li><a href="/aboutus">about us</a></li>
            <li><a href="/expertise">expertise</a></li>
            <li><a href="/testimonials">testimonials</a></li>
            <li><a href="/careers">careers</a></li>
            <li><a href="/blog">blog</a></li>
            <li><a href="/contacts">contact us</a></li>
        </ul>
    </div>
     <div class="footerLinks">
        <ul>
            <li>
                <a href="https://www.facebook.com/pages/Computools/1445183235708786" rel="nofollow"  target="_blank">
                    <span style="display: none;">Facebook Computools</span> <!--for SEO-->
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="https://www.behance.net/Computools" rel="nofollow"  target="_blank">
                    <span style="display: none;">behance Computools</span> <!--for SEO-->
                    <i class="fa fa-behance"></i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/computools_llc" rel="nofollow"  target="_blank">
                    <span style="display: none;">twitter Computools</span> <!--for SEO-->
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="http://www.linkedin.com/company/computools" rel="nofollow"  target="_blank">
                    <span style="display: none;">linkedin Computools</span> <!--for SEO-->
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="https://plus.google.com/111768535320145466918/about" rel="nofollow"  target="_blank">
                    <span style="display: none;">plus.google Computools</span> <!--for SEO-->
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li>
                <a href="https://dribbble.com/computoolsglobal" rel="nofollow"  target="_blank">
                    <span style="display: none;">dribbble Computools</span> <!--for SEO-->
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCyyYQdjRDTHA9OQDj6tDW4Q" rel="nofollow"  target="_blank">
                    <span style="display: none;">youtube Computools</span> <!--for SEO-->
                    <i class="fa fa-youtube-play"></i>
                </a>
            </li>
            <li>
                <a href="https://www.flickr.com/photos/134676122@N08/" rel="nofollow"  target="_blank">
                    <span style="display: none;">flickr Computools</span> <!--for SEO-->
                    <i class="fa fa-flickr"></i>
                </a>
            </li>
            <li>
                <a href="https://github.com/computools" rel="nofollow"  target="_blank">
                    <span style="display: none;">github Computools</span> <!--for SEO-->
                    <i class="fa fa-github"></i>
                </a>
            </li>
            <li>
                <a href="http://stackoverflow.com/users/5791151/computools" rel="nofollow"  target="_blank">
                    <span style="display: none;">stackoverflow Computools</span> <!--for SEO-->
                    <i class="fa fa-stack-overflow"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/computools/" rel="nofollow"  target="_blank">
                    <span style="display: none;">instagram Computools</span> <!--for SEO-->
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>
        <div>
            COMPUTOOLS GLOBAL L.P.  Registration No.: SL23534  Address: Dundee, 1/2 35 taits lane, Scotland DD2 1DZ, GB
            <br/>
            COMPUTOOLS LLC Registration No.: 39197570, Address: 69091 Ukraine, Zaporizhzhya b-r Gvardiyis’kiyi d.145 of.21
            <br/>
            Computools &copy; 2016  – Web, Mobile and Software Development Company. All Rights Reserved
        </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
