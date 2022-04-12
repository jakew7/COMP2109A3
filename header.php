<?php
/**
 * The header.
 this is the file that displays all of the head section
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<!-- add my other files -->
	
	<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/mocha/assets/bootstrap/css/bootstrap.min.css')) ?>">
	<!-- link custom CSS file once made -->
	<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/mocha/assets/css/custom.css')); ?>">
	<!-- bootstrap js -->
	<script type="text/javascript" href="<?php echo esc_url(home_url('wp-content/themes/mocha/assets/bootstrap/dist/js/bootstrap.js')) ?>"></script>
	<!-- add google fonts here -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
	<header class="row">
		<div class="col-sm-12 col-md-6 col-lg-8">
			<a href="<?php echo esc_url( home_url() );?>">
				
			</a>
		</div>
		<nav class="navbar">
		<a><img src="<?php echo esc_url ( home_url('wp-content/uploads/2022/04/logo-1.png') );?>" alt="logo"></a>
			<?php
			
				wp_nav_menu(array(
					'menu'           => 'main',
					'theme_location' => '',
					'depth'          => 2,
					'fallback_cb'    => false,
					'container'      => 'ul',
					'menu_class'     => 'navbar'
				));
				?>
			</nav>
	</header>