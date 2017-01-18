<?php
/**
 * The front page template file.
 *
 * Offering both the option to display posts or a static page on the front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package For_Real_This_Time
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php
			if ( 'posts' == get_option( 'show_on_front' ) ) {
				include( get_home_template() );
			} else {
				include( get_page_template() );
			}
			?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();