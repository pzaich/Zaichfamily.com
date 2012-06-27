<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<div class="article-wrapper">	
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<div class="entry-content">
					<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
					
					<?php the_content(); ?>
	
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>
				
	
				</div>
				
			<!--<?php edit_post_link('Edit this entry','','.'); ?>-->
				
			</article>
		</div>

	

	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<section class="clearboth">
	<?php comments_template(); ?>
</section>

<?php get_footer(); ?>