<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
    crossorigin="anonymous"></script>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/main.css">
</head>

<body <?php body_class(); ?>>

<?php 

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }

?>
<?php
    $filename = basename($_SERVER["REQUEST_URI"]);
    echo $filename
?>
  <header>
    <div class="container">
      <div class="navbar-container d-flex">
        <div class="navbar-left-side d-flex">
          <div class="header-img">
            <a href="/home">
              <img id="iqiom" src="/wp-content/themes/wp-bootstrap-starter/assets/images/5eb1d693b4315openlab-logo.png" />
            </a>
          </div>
          <div><a <?php echo ($filename == 'home') ? 'class="active"' : ''; ?> class="links" href="/home">Úvod</a></div>
          <div><a <?php echo ($filename == 'openlaby') ? 'class="active"' : ''; ?> class="links" href="/openlaby">Openlaby</a></div>
          <div><a <?php echo ($filename == 'nas-tim') ? 'class="active"' : ''; ?> class="links" href="/nas-tim">Náš tím</a></div>
          <div><a <?php echo ($filename == 'novinky') ? 'class="active"' : ''; ?> class="links" href="/novinky">Novinky</a></div>
          <div><a <?php echo ($filename == 'pre-ucitelov') ? 'class="active"' : ''; ?> class="links" href="/pre-ucitelov">Pre učiteľov</a></div>
          <div><a <?php echo ($filename == '2percent') ? 'class="active"' : ''; ?> class="links" href="/2percent">2%</a></div>
        </div>
        <div class="navbar-button">
          <a href="/pridaj-sa">
            <button class="button-blue openlab-button-sharp">
              Pridajte sa k nám
            </button>
          </a>
        </div>
      </div>
      <div class="navbar-display">
        <nav class="navbar navbar-light">
          <div class="container-fluid header-img">
            <a href="/home">
              <img id="iqiom" src="/wp-content/themes/wp-bootstrap-starter/assets/images/5eb1d693b4315openlab-logo.png" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarToggleExternalContent"
              aria-controls="navbarToggleExternalContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="navbar-divs px-4 pb-4">
            <div><a class="links" href="/home">Úvod</a></div>
            <div><a class="links" href="/openlaby">Openlaby</a></div>
            <div><a class="links" href="/nas-tim">Náš tím</a></div>
            <div><a class="links" href="/novinky">Novinky</a></div>
            <div><a class="links" href="/pre-ucitelov">Pre učiteľov</a></div>
            <div><a class="links" href="/2percent">2%</a></div>
            <a href="/pridaj-sa">
              <button class="button-blue openlab-button-sharp">
                Pridajte sa k nám
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1>
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo esc_attr( get_theme_mod( 'header_banner_title_setting' ) );
                    }else{
                        echo 'WordPress + Bootstrap';
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo esc_attr( get_theme_mod( 'header_banner_tagline_setting' ) );
                }else{
                        echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                    }
                    ?>
                </p>
                <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>