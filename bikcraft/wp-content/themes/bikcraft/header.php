<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<?php if(is_home() && !is_front_page()) { ?>
		<title><?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo', get_option('page_for_posts')); ?></title>
		<?php } else { ?>
		<title><?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?></title>
		<?php } ?>
		<meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?>"/>
		<meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>"/>
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<script>document.documentElement.classList.add("js");</script>

		<!-- Inicio Wordpress Header -->
		<?php wp_head(); ?>
		<!-- Final Wordpress Header -->

		<?php if ( is_front_page() ) {
			$imagem_id = get_field('background_home');
			$background_large = wp_get_attachment_image_src($imagem_id, 'large');
			$background_medium = wp_get_attachment_image_src($imagem_id, 'medium');
		?>
		
		<style type="text/css">
		.introducao {
			background: url('<?php echo $background_large[0] ?>') no-repeat center;
			background-size: cover;
		}
		@media only screen and (max-width: 767px) {
		.introducao {
			background: url('<?php echo $background_medium[0] ?>') no-repeat center;
			background-size: cover;
		}
		}
		</style>
		
		<?php } else { ?>
		<style type="text/css">
		.introducao-interna {
			background: #000 url("<?php the_field('background_interno'); ?>") no-repeat center;
			background-size: cover;
		}
		</style>
		<?php } ?>
		<?php $contato = get_page_by_title('contato'); ?>
		<style type="text/css">
			.quebra {
				background: url("<?php the_field('background_footer', $contato); ?>") no-repeat center;
				background-size: cover;
			}
		</style>	
	</head>
	<body>

		<header class="header">
			<div class="container">
				<a href="<?php bloginfo('url'); ?>" class="grid-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft.svg" alt="Bikcraft">
				</a>
				<nav class="grid-12 header_menu">
					<?php
						$args = array(
							'menu' => 'principal',
							'theme_location' => 'menu-principal',
							'container' => false
						);
						wp_nav_menu( $args );
					?>
				</nav>
			</div>
		</header>
