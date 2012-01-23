<div class="teaser-event archive">
	<div class="image">
		<?php 
			if($fields['field_event_flyer']->content){
				print $fields['field_event_flyer']->content;
			}elseif($fields['field_event_images']->content){
				print $fields['field_event_images']->content;
			}else{
				print $fields['field_charity_profile_image']->content;
			}
		?>
	</div>
	<div class="details">
		<h1><?php print $fields['title']->content; ?></h1>
		<h2><?php print $fields['field_event_date']->content; ?></h2>
	</div><!-- /details --> 
</div>