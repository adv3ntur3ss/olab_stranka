<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><?php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<div id="footer-center" class="container mb-70">
    <div class="row">
      <div class="pd015 col-md">
        <img id="m20028" src="./assets/logo.png" />
        <h4 id="f13h17">
          © 2020 Všetky práva vyhradené
          <br />
          OpenLab, o. z.
        </h4>
      </div>
      <div class="col-md">
        <h4 class="h4f13">IČO: 50764675</h4>
        <h4 class="h4f13">Viedenská cesta 257, 851 01 Bratislava</h4>
      </div>
      <div class="col-md">
        <a href="tel:+421 903 758 062">
          <h4 class="h4f13 underline">+421 903 758 062</h4>
        </a>
        <a href="mailto:info@openlab.sk">
          <h4 class="h4f13 underline">info@openlab.sk</h4>
        </a>
      </div>
      <div class="col-md">
        <div class="d-flex content-end social-icons">
          <a href="https://www.facebook.com/OpenLab.sk/" target="_blank">
            <img src="./assets/facebook.png" />
          </a>
          <a
            href="https://www.instagram.com/openlab.sk/?igshid=1xz2g75a3yzu1"
            target="_blank"
          >
            <img src="./assets/instagram.png" />
          </a>
          <a
            href="https://www.linkedin.com/company/openlab-sk/?trk=public_profile_topcard_current_company&originalSubdomain=sk"
            target="_blank"
          >
            <img src="./assets/linkedin.png" />
          </a>
        </div>
      </div>
    </div>
  </div>


<?php wp_footer(); ?>
</body>
</html>