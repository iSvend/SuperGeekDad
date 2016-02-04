<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<div style="margin-top:160px;">
    <?php
				
				$sticky = get_option( 'sticky_posts' );
				rsort( $sticky );
				
				$args = array(
				'post__in' => $sticky,
				'posts_per_page' => 1
				);
				
				$sticky_query = new WP_Query( $args );
				
			while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>


		<?php get_template_part( 'content', 'front' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>

</div>
<?php get_footer(); ?>
