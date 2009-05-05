<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle"><?php _e('Search Results', 'minimalism'); ?></h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'minimalism')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'minimalism')) ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'minimalism'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<p class="postmetadata"><?php the_tags(__('Tags:', 'minimalism') . ' ', ', ', '<br />'); ?> <?php printf(__('Posted in %s', 'minimalism'), get_the_category_list(', ')); ?> | <?php edit_post_link(__('Edit', 'minimalism'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'minimalism'), __('1 Comment &#187;', 'minimalism'), __('% Comments &#187;', 'minimalism'), '', __('Comments Closed', 'minimalism') ); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'minimalism')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'minimalism')) ?></div>
		</div>

	<?php else : ?>

		<h2 class="center"><?php _e('No posts found. Try a different search?', 'minimalism'); ?></h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
