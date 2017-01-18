<?php
/**
 * The template for displaying archive pages
 * (for all categories except blog posts)
 * 
 * @package For_Real_This_Time
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php if ( have_posts() ) : ?>
<!--Probably should just include headings for each subcat instead.-->		
		<header class="page-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
		</header><!-- .page-header -->
			
		<?php while (have_posts()) : the_post(); ?>
<!--Need to loop through each subcategory, style each subcat, etc.-->		
		<div class="single-post-listing">
			<a class="single-post-link" rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</div>
		<?php endwhile; endif; ?>
		
		<div id="single-container"></div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
