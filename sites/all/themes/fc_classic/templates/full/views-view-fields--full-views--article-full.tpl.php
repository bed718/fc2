<div class="full article">
	<div class="author clearfix">
		<a href="/type/article">Article</a> posted on: <?php print $fields['created']->content; ?>
		<div class="service-links clearfix"><?php print $fields['service_links']->content; ?></div>
	</div>
	
	<?php if($fields['field_article_images']->content): ?>
	   <div class="image-holder">
		   
		   <?php print $fields['field_article_images']->content; ?>
		   
	   </div>
	<?php endif; ?>
	
	<?php if($fields['body']->content): ?>
	   <div class="">
	   <?php print $fields['body']->content; ?>
	   <?php if($fields['field_article_url']->content): ?>
	   	<div class="tags">Original Article <?php print $fields['field_article_url']->content; ?></div>
		<?php endif; ?>
	   </div>
	<?php endif; ?>
	
	<?php if($fields['field_article_images_1']->content): ?>
		   	<div class="images clearfix">
		   		<h2>Other Images</h2>
		   		<?php print $fields['field_article_images_1']->content; ?>
		   	</div>
		   <?php endif; ?>
	
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?> <?php print $fields['field_cause']->content; ?></div>
	<?php endif; ?>
</div>