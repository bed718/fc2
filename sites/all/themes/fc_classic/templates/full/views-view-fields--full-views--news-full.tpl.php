<div class="full news">
	<div class="author clearfix">
		<a href="/type/news">News</a> posted on: <?php print $fields['created']->content; ?>
		<div class="service-links clearfix"><?php print $fields['service_links']->content; ?></div>
	</div>
	<?php if($fields['body']->content): ?>
	   <div class="body"><?php print $fields['body']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['field_news_images']->content): ?>
		<h2 class="info-header">Images</h2>
	   <div class="images clearfix"><?php print $fields['field_news_images']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?> <?php print $fields['field_cause']->content; ?></div>
	<?php endif; ?>
</div>
