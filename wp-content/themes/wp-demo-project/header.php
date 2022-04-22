<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes" />

		<!-- Header scripts (only essential) -->
		<!--[if lt IE 9]>
		  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script>
		  (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
		</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="skip-to-content" class="screen-reader-text">
			<a href="#site-content"><?php _e('Skip to main content', 'xtheme'); ?></a>
		</div>
		<?php
			$phone_number = get_field('phone_number', 'option');
            $email = get_field('email', 'option');
		?>
		<div class="topbar">
			<div class="centering">
				<div class="topbar-inner">
					<div class="topbar-social-links">
						<?php get_template_part('components/bookmarks'); ?>
					</div>
					<div class="topbar-contact-details">
						<div class="contact-detail">
							<a href="tel: <?php echo str_replace(' ', '', $phone_number); ?>"><span><i class="icon icon-call"></i><?php echo $phone_number; ?></span></a>
						</div>
						<div class="contact-detail">
							<a href="mailto: <?php echo $email; ?>"><span><i class="icon icon-email"></i>
							<?php echo $email; ?></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header id="site-header" class="header" role="banner" aria-label="Main Header">
			<div class="centering">
				<div class="header-inner">
					<div class="header-logo">
						<a href="<?php echo site_url(); ?>" title="Back to Homepage">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Logo.jpg" alt="Logo" 
							onerror="this.onerror=null; this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png'" alt="<?php bloginfo('name'); ?>" aria-label="<?php echo get_bloginfo('name'); ?> Logo"
								aria-label="Xanda Logo" />
						</a>
					</div>

					<a class="hamburger" href="#" title="Menu">
						<span class="line-1"></span>
						<span class="line-2"></span>
						<span class="line-3"></span>
					</a>

					<nav id="main-nav" class="main-nav" role="navigation" aria-label="Main Navigation">
						<?php wp_nav_menu( array('theme_location'  => 'main', 'container' => false) ); ?>
					</nav>
				</div>
			</div>
		</header>

		<main id="site-content" class="main" role="main" aria-label="Main Content">
			<?php if (is_front_page()) : ?>
				<?php get_template_part('components/hero'); ?>
			<?php endif; ?>