<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<!--<p class="powered-by-wordpress">
							<a href="<?php /*echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); */?>">
								<?php /*_e( 'Powered by WordPress', 'twentytwenty' ); */?>
							</a>
						</p>--><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>
<script>
    window.addEventListener("scroll", function(){
        const header = document.getElementById("site-header");
        header.classList.toggle('sticky', window.scrollY > 80);
    });

    const scrollBtn = document.querySelector(".scrollToTop-btn");

    window.addEventListener("scroll", function(){
        scrollBtn.classList.toggle("active", window.scrollY > 500);
    });

    //javascript for scroll back to top on click scroll-to-top button
    scrollBtn.addEventListener("click", () => {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
</script>
	</body>
</html>
