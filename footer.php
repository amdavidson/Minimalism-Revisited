
<hr />
<div id="footer">
	<p>
		Blog Engine: <a href="http://wordpress.org/">WordPress</a> | Blog Theme: <a href="http://andr3w.net/minimalism-revisited/">minimalism-revisited</a> by <a href="http://www.andr3w.net/">www.andr3w.net</a>
		<br /><?php printf(__('%1$s and %2$s.', 'minimalism'), '<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries (RSS)', 'minimalism') . '</a>', '<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments (RSS)', 'minimalism') . '</a>'); ?>
		<?php printf(__('%d queries. %s seconds.', 'minimalism'), get_num_queries(), timer_stop(0, 3)); ?>
	</p>
</div>
</div>
		<?php wp_footer(); ?>
</body>
</html>