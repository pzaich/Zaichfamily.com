<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="article-wrapper"?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				
				<div class="floatright thumbnail">
					<?php if (has_post_thumbnail()){ ?>
						<?php the_post_thumbnail(); } ?>
				</div>
					
				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
	
				<div class="entry">
					
					<?php the_excerpt(); ?>
					
				</div>
				
					
				<footer class="postmetadata">
					<!--<?php the_tags('Tags: ', ', ', '<br />'); ?>-->
					<!--Posted in <?php the_category(', ') ?> |--> 
					<!--<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>-->
				</footer>
	
			</article>
		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
