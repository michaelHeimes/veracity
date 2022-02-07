<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">
	<div class="grid-container">
		<div class="inner-content grid-x grid-padding-x">
	
			<main class="main small-12 medium-8 large-8 large-offset-1 cell" role="main">
			
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			    	<?php get_template_part( 'parts/loop', 'single' ); ?>
			    	
			    <?php endwhile; else : ?>
			
			   		<?php get_template_part( 'parts/content', 'missing' ); ?>
	
			    <?php endif; ?>
	
			</main> <!-- end #main -->
		
		</div> <!-- end #inner-content -->
	</div>
</div> <!-- end #content -->

<?php get_footer(); ?>