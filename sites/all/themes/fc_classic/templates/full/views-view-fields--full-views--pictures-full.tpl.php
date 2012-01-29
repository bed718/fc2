<div class="full pictures">
	<div class="author clearfix">
		<a href="/type/pictures">Gallery</a> posted on: <?php print $fields['created']->content; ?>
		<div class="service-links clearfix"><?php print $fields['service_links']->content; ?></div>
	</div>
	<?php if($fields['field_picture_images']->content): ?>
	   <div class="images clearfix"><?php print $fields['field_picture_images']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?> <?php print $fields['field_cause']->content; ?></div>
	<?php endif; ?>
</div>