<?php
/**
 * The sidebar containing the main widget area
 *
 * @package _tk
 */
?>




		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar-padder">

			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

				
					<?php get_search_form(); ?>
				

				
					<h3 class="widget-title"><?php _e( 'Archives', '_tk' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				

				
					<h3 class="widget-title"><?php _e( 'Meta', '_tk' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				

			<?php endif; ?>
