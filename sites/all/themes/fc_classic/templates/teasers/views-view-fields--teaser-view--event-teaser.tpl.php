<?php
	
	if($fields['field_event_flyer']->content){
		$image = $fields['field_event_flyer']->content;
	}elseif($fields['field_event_images']->content){
		$image = $fields['field_event_images']->content;
	}elseif($fields['field_charity_profile_image']->content){
		$image = $fields['field_charity_profile_image']->content;
	}elseif($fields['field_user_profile_image']->content){
		$image = $fields['field_user_profile_image']->content;
	}
	
	if($fields['field_charity_name']->content){
		$profile_name = $fields['field_charity_name']->content;
	}elseif($fields['field_user_name']->content){
		$profile_name = $fields['field_user_name']->content;
	}else{
		$profile_name = $fields['name']->content;
	}
	
	$focus = $fields['field_focus']->content;
	
?>

<div class="teaser teaser-details event">
	<div class="image-icons">
		
		<div class="image">
			<?php print $image; ?>
		</div>
		
		<div class="icons">
			<div class="icon-type icons-30">
				<div class="icon <?php print strtolower($fields['type']->content); ?>"><a href="/type/<?php print strtolower($fields['type']->content); ?>"></a></div>
			</div>
			<div class="icon-focus icons-25">
				<?php if(strpos($focus, 'Animal') !== false): ?>
					<div class="icon animal"><a href="/animals"></a></div>
				<?php endif; ?>
				<?php if(strpos($focus, 'People') !== false): ?>
					<div class="icon people"><a href="/environment"></a></div>
				<?php endif; ?>
				<?php if(strpos($focus, 'Environment') !== false): ?>
					<div class="icon enviro"><a href="/people"></a></div>
				<?php endif; ?>
			</div>

			<div class="icons-bg"></div>
		</div>
	</div> <!-- /image-icons -->

	<div class="details">
		<h1><?php print $fields['title']->content; ?></h1>
		<div class="stats">
			<span class="date">
				<?php print $fields['field_event_date']->content; ?>
				
			</span>
			<?php if($fields['city']->content || $fields['province']->content): ?>
				<span class="location"><?php print $fields['city']->content; ?> <?php print $fields['province']->content; ?></span>				
			<?php endif; ?>
			</div>
			<div class="author">
				<?php if($fields['field_charity_name']->content): ?>
					posted by: <a href="/charity/<?php print $fields['name']->content; ?>"><?php print $fields['field_charity_name']->content; ?></a>
				<?php else: ?>
					posted by: <a href="/user/<?php print $fields['name']->content; ?>"><?php print $fields['field_user_name']->content; ?></a>
				<?php endif; ?>
		</div> 
	</div><!-- /details --> 
</div> <!-- /teaser-small --> 