<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'minimalism'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;', 'minimalism') . '</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'minimalism') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>' . __('Tags:', 'minimalism') . ' ', ', ', '</p>'); ?>

				<p class="postmetadata alt">
					<small>
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); $time_since = sprintf(__('%s ago', 'minimalism'), time_since($entry_datetime)); */ ?>
						<?php printf(__('This entry was posted %1$s on %2$s at %3$s and is filed under %4$s.', 'minimalism'), $time_since, get_the_time(__('l, F jS, Y', 'minimalism')), get_the_time(), get_the_category_list(', ')); ?>
						<?php printf(__("You can follow any responses to this entry through the <a href='%s'>RSS 2.0</a> feed.", "kubrick"), get_post_comments_feed_link()); ?>

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							<?php printf(__('You can <a href="#respond">leave a response</a>, or <a href="%s" rel="trackback">trackback</a> from your own site.', 'minimalism'), trackback_url(false)); ?>

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							<?php printf(__('Responses are currently closed, but you can <a href="%s" rel="trackback">trackback</a> from your own site.', 'minimalism'), trackback_url(false)); ?>

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.', 'minimalism'); ?>

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							<?php _e('Both comments and pings are currently closed.', 'minimalism'); ?>

						<?php } edit_post_link(__('Edit this entry', 'minimalism'),'','.'); ?>

					</small>
				</p>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.', 'minimalism'); ?></p>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
