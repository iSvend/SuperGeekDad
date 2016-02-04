<?php
/**
 * @package _tk
 */
?>
<header id="masthead" class="site-header jumbotron" role="banner" style="background:url('http://res.cloudinary.com/isvend/image/upload/v1454551700/bottle_zzhpsu.jpg') center no-repeat;background-size:cover;position: absolute;top: 0;left: 0;width: 100%;padding:0;height: 100vh;z-index:-1;border-radius: 0;">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container" style="margin-top: 75px;">
		<div class="row">
			<div class="site-header-inner col-sm-12">

				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php } // end if ( ! empty( $header_image ) ) ?>


				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 style="margin-top: 0px;text-transform: uppercase;color: rgba(106,105,110,1);"><?php bloginfo( 'description' ); ?></h2>
				</div>

			</div>
		</div>
	</div><!-- .container -->
</header><!-- #masthead -->

<?php // Styling Tip!

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below.
// Simply replace post_class() with post_class('panel') and check your site!
// Remember to do this for all content templates you want to have this,
// for example content-single.php for the post single view. ?>
<div class="jumbotron" style="background:transparent;text-align:center;">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="page-title" style="text-transform: uppercase;font-size: 46px; border: solid rgba( 85, 68,190,1); padding: 10px;"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<h3 style="text-transform:uppercase;color: rgba(106,105,110,1);">POSTED ON <?php the_time('M.d, Y') ?></h3>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
        <p style="color: rgba(106,105,110,1);">
		<?php
            $excerpt = get_the_excerpt();
            echo string_limit_words($excerpt,25);
        ?>
        </p>
        <a href="<?php the_permalink(); ?>" rel="bookmark" class="btn btn-lg btn-primary">READ MORE</a>
        
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
</article><!-- #post-## -->
</div>