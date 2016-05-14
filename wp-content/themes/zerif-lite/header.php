<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
<![endif]-->

<?php

if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function zerif_old_render_title() {
?>
<title><?php wp_title( '-', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'zerif_old_render_title' );
endif;

wp_head(); ?>
<script type="text/javascript" src="/wp-content/themes/zerif-lite/js/jquery.maskedinput.js"></script>

</head>

<?php if(isset($_POST['scrollPosition'])): ?>

	<body <?php body_class(); ?> onLoad="window.scrollTo(0,<?php echo intval($_POST['scrollPosition']); ?>)">

<?php else: ?>

	<body <?php body_class(); ?> >

<?php endif; 

	global $wp_customize;
	
	/* Preloader */

	if(is_front_page() && !isset( $wp_customize ) && get_option( 'show_on_front' ) != 'page' ): 
 
		$zerif_disable_preloader = get_theme_mod('zerif_disable_preloader');
		
		if( isset($zerif_disable_preloader) && ($zerif_disable_preloader != 1)):
			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';
		endif;	

	endif; ?>


<div id="mobilebgfix">
	<div class="mobile-bg-fix-img-wrap">
		<div class="mobile-bg-fix-img"></div>
	</div>
	<div class="mobile-bg-fix-whole-site">

<div class="sn-wrap">
	<span class="mobile-sn"><i class="fa fa-exchange"></i></span>
	<ul class="sn-ul">
		<li class="callback-popup"><i class="fa fa-phone"></i></li>
		<li class="contact-popup"><i class="fa fa-envelope"></i></li>
		<li><i class="fa fa-facebook"></i></li>
		<li><i class="fa fa-instagram"></i></li>
		<li><i class="fa fa-twitter"></i></li>
	</ul>
</div>
<div class="overlay"></div>
<div class="callback-form">
	<span class="close"><i class="fa fa-close"></i></span>
	<p class="form-title">Перезвоните мне</p>
	<form type="post" action="handler.php" id="callback_form">
		<input type="hidden" name="type" value="0"/>
		<p><input required="required" type="text" name="callback_name" placeholder="Ваше имя"/></p>
		<p><input required="required" id="callback_num" type="text" name="callback_num" placeholder="Номер телефона"/></p>
		<input class="q_send btn btn-primary custom-button red-btn" type="submit" value="Отправить"/>
	</form>
</div>

<div class="my-contact-form">
	<span class="close"><i class="fa fa-close"></i></span>
	<p class="form-title">Обратная связь</p>
	<form type="post" action="handler.php" id="contact_form">
		<input type="hidden" name="type" value="1"/>
		<p><input required="required" type="text" name="contact_name" placeholder="Ваше имя"/></p>
		<p><input required="required" id="contact_email" type="email" name="contact_email" placeholder="Ваш Email"/></p>
		<p><input required="required" id="contact_subject" type="text" name="contact_subject" placeholder="Тема"/></p>
		<p><textarea required="required" id="contact_message" type="text" name="contact_message" placeholder="Ваш сообщение"></textarea></p>
		<input class="q_send btn btn-primary custom-button red-btn" type="submit" value="Отправить"/>
	</form>
</div>

<!-- <div class="service-booking">
	<span class="close"><i class="fa fa-close"></i></span>
	<p class="form-title">Зарезервировать</p>
	<form type="post" action="handler.php" id="service-booking">
		<input type="hidden" name="type" value="2"/>
		<p><input required="required" id="" type="text" name="" placeholder="Номер телефона"/></p>
		<input class="q_send btn btn-primary custom-button red-btn" type="submit" value="Отправить"/>
	</form>
</div>
-->
<header id="home" class="header">

	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

		<div class="container">

			<div class="navbar-header responsive-logo">

				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

				<span class="sr-only"><?php _e('Toggle navigation','zerif-lite'); ?></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				</button>

				<?php

					$zerif_logo = get_theme_mod('zerif_logo');

					if(isset($zerif_logo) && $zerif_logo != ""):

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

							echo '<img src="'.esc_url( $zerif_logo ).'" alt="'.esc_attr( get_bloginfo('title') ).'">';

						echo '</a>';

					else:

						echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';
						
							if( file_exists(get_stylesheet_directory()."/images/logo.png")):
							
								echo '<img src="'.get_stylesheet_directory_uri().'/images/logo.png" alt="'.esc_attr( get_bloginfo('title') ).'">';
							
							else:
								
								echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="'.esc_attr( get_bloginfo('title') ).'">';
								
							endif;

						echo '</a>';

					endif;

				?>

			</div>

			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation"   id="site-navigation">
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'zerif-lite' ); ?></a>
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb'     => 'zerif_wp_page_menu')); ?>
			</nav>

		</div>

	</div>
	<!-- / END TOP BAR -->
