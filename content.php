<?php
	/**
		* @package _tk
	*/
?>


<?php // Styling Tip!
	
	// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
	// Just add the class "panel" to the article tag here that starts below.
	// Simply replace post_class() with post_class('panel') and check your site!
	// Remember to do this for all content templates you want to have this,
// for example content-single.php for the post single view. ?>

<div class="grid-item grid-sizer col-xs-12 col-sm-4" id="post-<?php the_ID(); ?>">
	
	<div style="margin:20px 5px;padding:20px 40px;background:#ddd;">
		
		<div class="col-xs-12" style="text-align:center;">
			<div style="border-radius:50%;width:100px;height:100px;background:rgba(134,231, 60,.7);line-height:100px;text-align:center;margin:-40px auto;">
				<span style="font-weight:bold;"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'your-text-domain' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
			</div>
		</div>
		
		<header style="margin-top:80px;">
			<h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php _tk_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		
		<?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', '_tk' ) ); ?>
			<?php
				wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>
		
		<footer class="entry-meta">
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', '_tk' ) );
				if ( $categories_list && _tk_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', '_tk' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
			
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', '_tk' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', '_tk' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>
			
			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', '_tk' ), __( '1 Comment', '_tk' ), __( '% Comments', '_tk' ) ); ?></span>
			<?php endif; ?>
			
			<?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</div>
</div><!-- #post-## -->
