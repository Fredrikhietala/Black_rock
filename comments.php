<?php 
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this directly. Thanks!');
?>

	<div id="comments">
		<h3><?php comments_number('Inga kommentarer', '1 kommentar', '% kommentarer'); ?></h3>

	<?php if (have_comments() ) : ?>
		<ol class="commentlist">
			<?php wp_list_comments('avatar_size=64&type=comment'); ?>
		</ol>

		<?php if ($wp_query->max_num_pages > 1) : ?>
			<div class="pagination">
				<ul>
					<li class="older"><?php previous_comments_link('Äldre') ?></li>
					<li class="newer"><?php next_comments_link('Nyare') ?></li>
				</ul>
			</div>

		<?php endif; ?>

	<?php endif; ?>

	<?php if (comments_open() ) : ?>

		<div id="respond">
			<h3>Lämna en kommentar</h3>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<fieldset>
					<label for="author">Namn:</label>
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />

					<label for="email">Email:</label>
					<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" />					

					<label for="url">Hemsida:</label>
					<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" />

					<label for="comment">Kommentar:</label>
					<textarea name="comment" id="comment" rows="" cols=""></textarea>
					<br>

					<input type="submit" class="commentsubmit" value="Skicka" />

					<?php comment_id_fields(); ?>
					<?php do_action('comment_form', '$post->ID'); ?>
				</fieldset>
			</form>
			<p class="cancel"><?php cancel_comment_reply_link('Avbryt kommentar'); ?></p>
		</div>

	<?php else : ?>
		<h3>Kommentarerna är nu stängda.</h3>
	<?php endif; ?>
	</div>
