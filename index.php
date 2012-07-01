<?php get_header(); ?>

<div id="main">
	
	<section id="content">
		<section id="scrolly">
	<?php query_posts( array ( 'category_name' => 'film')); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				
				<?php /* the_content( __( 'Read more', 'blm_basic' ) ); */
				the_post_thumbnail( 'single-post-thumbnail', array('class' => 'alignleft'));
				the_excerpt();?>
	
				<?php get_template_part( 'inc/meta' ); ?>
	
			</article> <!-- end post article -->
		
	<?php comments_template(); ?>
		
	<?php endwhile; else: ?>
	
	    <h2><?php _e( 'Not Found', 'blm_basic' ); ?></h2>
	
		<p><?php _e( 'Sorry, you seem to be looking for something that simply is not here.', 'blm_basic' ); ?></p>
		
	<?php endif; ?>
	
	<?php get_template_part( 'inc/nav' ); ?>
	
			</section>	<!-- end scrolly section -->

	</section><!-- #content -->

<?php // get_sidebar(); ?>

</div><!-- #main -->

<?php get_footer(); ?>
