<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8 mx-auto">
		<div id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div><!-- #main -->
	</section><!-- #primary -->

	<div class="static col-sm-12 col-md-12 col-lg-8 mx-auto">
		<div class="card-body">
			<h5 class="card-title">Vous voulez avoir à l’oeil votre revenu annuel ? </h5>
			<p class="card-text">Téléchargez Accountable. Dans l’écran “Taxes” vous verrez votre revenu annuel toujours à jour. Vous ne serez pas surpris par le premier euro qui passe la barre de la franchise TVA !</p>
		</div>
	</div>

	<div class="sticky-banner">
		<div class="card-body">
			<h5 class="card-title">Vos impôts d’indépendant ? Déjà faits !</h5>
			<p class="card-text">Ajoutez vos factures, l’appli prépare vos déclarations sans erreur. Ne stressez plus jamais pour vos impôts.</p>
			<a href="#" class="btn">Essayez maintenant</a>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/asset/220929_Illustration_Set_Scenery_Items_v31.png">
	</div><!-- .sticky-banner  -->

<?php

get_footer();
