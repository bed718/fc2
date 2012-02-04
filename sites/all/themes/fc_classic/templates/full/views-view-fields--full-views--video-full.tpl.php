
	
<div class="full video">
	<div class="author clearfix">
		<a href="/type/video">Video</a> posted on: <?php print $fields['created']->content; ?>
		<div class="service-links clearfix"><?php print $fields['service_links']->content; ?></div>
	</div>
	<?php if($fields['field_video_url']->content): ?>
	   <div class="video"><?php print $fields['field_video_url']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['body']->content): ?>
	   <h2 class="info-header">Video Details</h2>
	   <?php if($fields['field_video_fv_feature']->content): ?>
		<div class="header-info">
			<?php if($fields['field_video_celeb_name']->content): ?>
			  <?php print $fields['field_video_celeb_name']->content; ?>
			<?php endif; ?>
			<?php if($fields['field_video_celeb_link']->content): ?>
			   ( <?php print $fields['field_video_celeb_link']->content; ?> )
			<?php endif; ?>
			<?php if($fields['field_video_celeb_charities']->content): ?>
			   <div class="">Supported Charities: <?php print $fields['field_video_celeb_charities']->content; ?></div>
			<?php endif; ?>	
		</div>	
<?php endif; ?>
	   <div class="body"><?php print $fields['body']->content; ?></div>
	<?php endif; ?>
	<?php if($fields['field_focus']->content): ?>
	   <div class="tags">Tags <?php print $fields['field_focus']->content; ?> <?php print $fields['field_cause']->content; ?></div>
	<?php endif; ?>
</div>