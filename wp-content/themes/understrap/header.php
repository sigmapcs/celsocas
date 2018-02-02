<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://file.myfontastic.com/UscuiX96HcTBaoWM6ZbHoj/icons.css" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="main-header">
    <div class="main-header__container">
      <h1 class="main-header__title">
        <div class="img">
          <a href="/" class="logo-kink">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
          </a>
        </div>
        <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a> -->
        <div class="title">
          <?php bloginfo( 'description' ); ?>
          <span id="date" class="date"></span>
        </div>
      </h1>
      <div class="main-header__form">
        <?php get_search_form(); ?>
      </div>
    </div>
  </header>
  <section class="cards-container">
    <div class="card " id="card-blog">
      <a href="#" class="card-menu" rel="blog">
        <h3 class="card__title">blog</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/img/bota.png" alt="" class="card-img">
      </a>
    </div>
    <div class="card  " id="card-cursos">
      <a href="#" class="card-menu" rel="cursos">
        <h3 class="card__title">cursos</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/img/casco.png" alt="" class="card-img">
      </a>
    </div>
    <div class="card  " id="card-applets">
      <a href="#" class="card-menu" rel="applets">
        <h3 class="card__title">applets</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/img/guantes.png" alt="" class="card-img">
      </a>
    </div>
  </section>
  <section class="slogan">
    <p>Ten menos curiosidad por la gente, y más curiosidad
      por las ideas <span>- Marie Curie</span></p>

  </section>
  <div class="layout">
    <aside class="side-bar side-bar-left">
      <?php get_template_part( 'sidebar-left' ); ?>

    </aside>
