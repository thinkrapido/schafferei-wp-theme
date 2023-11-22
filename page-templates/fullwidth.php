<?php
/**
 * Template Name: Full Width Page
 */

get_header();
?>

<main id="site-main">

	<div class="site-section-wrapper site-section-wrapper-main">

	<?php
	while (have_posts()) : the_post();

	academiathemes_hero_image_inside($post);

	ilovewp_helper_display_breadcrumbs($post);
	?>

	<div class="site-page-content">
		<div class="site-section-wrapper site-section-wrapper-main">

			<?php
			ilovewp_helper_display_title($post);
			ilovewp_helper_display_content($post);
			ilovewp_helper_display_comments($post);

			?>

		</div><!-- .site-section-wrapper .site-section-wrapper-main -->
	</div><!-- .site-page-content -->

	<?php
	endwhile;
	?>

	</div><!-- .site-section-wrapper .site-section-wrapper-main -->

</main><!-- #site-main -->
	
<?php get_footer(); ?>