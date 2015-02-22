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
	</header><!-- #masthead -->

	<div id="front-page-content">
		<div id="front-page-column-block">
			<hr />
			<div class="front-page-column">
				<img src="<?php echo bloginfo('template_url'); ?>/images/spring.jpg" alt="printemps" class="front-page-image" />
				<hr />
				<div class="front-page-text-block"><a href="http://selzeceux.fr/category/actualites/"><h2>Actualités</h2>Voici les actualités de SelZeCeux</a></div>
			</div>

			<div class="front-page-column">
				<img src="<?php echo bloginfo('template_url'); ?>/images/summer.jpg" alt="été" class="front-page-image" />
				<hr />
				<div class="front-page-text-block"><a href="http://selzeceux.fr/les-statuts/"><h2>Système d’échange local</h2>Le principe du SEL est basé sur le simple constat que individu possède des moyens, des compétences ou du temps qu’il peut échanger avec les autres.</a></div>
			</div>

			<div class="front-page-column">
				<img src="<?php echo bloginfo('template_url'); ?>/images/autumn.jpg" alt="automne" class="front-page-image" />
				<hr />
				<div class="front-page-text-block"><a href="http://selzeceux.fr/jardin-des-ressources/"><h2>Echanges et ressources</h2>Tout le monde, enfants, retraités, a des choses à proposer, il suffit d’être à l’écoute de ses savoirs, ses loisirs, ses connaissances …. et les proposer.</a></div>
			</div>

			<div class="front-page-column">
				<img src="<?php echo bloginfo('template_url'); ?>/images/winter.jpg" alt="hiver" class="front-page-image" />
				<hr />
				<div class="front-page-text-block"><a href="http://selzeceux.fr/inscription/"><h2>Inscription</h2>Tout habitant de Villeconin et ses hameaux peut devenir membre de SelZéCeux . Les parents peuvent y inscrire leurs enfants mineurs s’ils sont eux-mêmes inscrits.</a></div>
			</div>
			</div>
	</div>

<?php get_footer(); ?>

</div>
