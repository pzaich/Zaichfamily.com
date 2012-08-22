<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php single_cat_title(); ?></h1>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1>Posts Tagged <?php single_tag_title(); ?></h1>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1 class="pagetitle">Author Archive</h1>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1 class="pagetitle">Blog Archives</h1>
			
			<?php } ?>

			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

			<?php while (have_posts()) : the_post(); ?>
			
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

		<h2>Nothing found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
