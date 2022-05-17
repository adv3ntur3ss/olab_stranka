<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div id="page" class="site">
	<div id="content" class="site-nt">
		<div class="container">
			<div id="main" class="site-main error-content" role="main">
				<div class="page-content error-content-wrapper">
					<h2>Stránka, ktorú hladáš neexistuje</h2>
					<img src="./assets/images/404_img.png">
					<a href="/">HOME</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
