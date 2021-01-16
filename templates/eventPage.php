<?php /*
Template Name: Eventpage ( Posts Page)
*/ ?>


<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">
			<?php cryout_before_content_hook(); ?>


<?php 
    // First we need to show content from WordPress editor so use this code:
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

<?php 
    $loop = new WP_Query( array( 'post_type' => 'event-post', 'posts_per_page' => 10 ) ); 

    while ( $loop->have_posts() ) : $loop->the_post();

    the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); 
?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>

			<?php cryout_after_content_hook(); ?>
			</div><!-- #content -->
	<?php get_sidebar(); ?>
		</div><!-- #container -->

<?php get_footer(); ?>