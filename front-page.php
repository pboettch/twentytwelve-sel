<?php
/* @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve Sel
 */

get_header();
?>

<div id="front-page">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
		<div class="logo"><a href="http://selidaire.fr/" title="SEL'idaire" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/logo_selidaire_v5.jpg" width="50" /></a></div>
	</header><!-- #masthead -->

	<div id="front-page-content">
		<div id="front-page-column-block">
			<hr />
			<?php

			$default_images = array(
					get_bloginfo('template_url').'/images/spring.jpg',
					get_bloginfo('template_url').'/images/summer.jpg',
					get_bloginfo('template_url').'/images/autumn.jpg',
					get_bloginfo('template_url').'/images/winter.jpg'
			);

			for ($i = 0; $i < 4; $i++) {

				?><div class="front-page-column">
				<img src="<?php echo of_get_option('image'.$i, true); ?>" class="front-page-image" width="200" height="200" />
				<hr />
				<div class="front-page-text-block"><?php echo of_get_option('imagetext'.$i); ?> </div>
				</div>

			<?php } ?>
			</div>
	</div>

<?php get_footer(); ?>

</div>
