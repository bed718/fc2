<div class="teaser">
	<?php print $fields['field_video_url']->content; ?>

	<div class="details">
		<h1><?php print $fields['title']->content; ?></h1>
		<div class="stats">
			<span class="date"><?php print $fields['created']->content; ?></span>&bull;
			<span class="type"><a href="type/<?php print $fields['type']->content; ?>"><?php print $fields['type']->content; ?></a></span>
			<?php if($fields['comment_count']->content): ?>
			&bull;
			<span class="comments">comments (<?php print $fields['comment_count']->content; ?>)</span>				
		
			<?php endif; ?>
			</div>
			<div class="author">
				<?php if($fields['field_charity_name']->content): ?>
					by: <a href="/fc/charity/<?php print $fields['name']->content; ?>"><?php print $fields['field_charity_name']->content; ?></a>
				<?php else: ?>
					by: <a href="/fc/user/<?php print $fields['name']->content; ?>"><?php print $fields['field_user_name']->content; ?></a>
				<?php endif; ?>
		</div> 
	</div><!-- /details --> 
</div> <!-- /teaser-small --> 