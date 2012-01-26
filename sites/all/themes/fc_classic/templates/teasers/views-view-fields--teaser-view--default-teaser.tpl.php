<?php
	
	if($fields['field_article_images']->content){
		$image = $fields['field_article_images']->content;
		
	}elseif($fields['field_news_images']->content){
		$image = $fields['field_news_images']->content;
		
	}elseif($fields['field_need_images']->content){
		$image = $fields['field_need_images']->content;
		
	}elseif($fields['field_project_images']->content){
		$image = $fields['field_project_images']->content;
		
	}elseif($fields['field_picture_images']->content){
		$image = $fields['field_picture_images']->content;
		
	}elseif($fields['field_video_url']->content){
		$image = $fields['field_video_url']->content;
			
	}elseif($fields['field_charity_profile_image']->content){
		$image = $fields['field_charity_profile_image']->content;
		
	}elseif($fields['field_user_profile_image']->content){
		$image = '<a href="' . $fields['path']->content . '">' . $fields['field_user_profile_image']->content . '</a>';
	}else{
		$no_image = 'FC_no_image.jpg';
		$thumb_style = array( 'style_name' => 'teaser_small', 'path' => $no_image);
		$image = '<a href="' . $fields['path']->content . '">' . theme('image_style', $thumb_style) . '</a>';
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
				<div class="icon <?php print strtolower($fields['type']->content); ?>"><a href="#"></a></div>
			</div>
			<div class="icon-focus icons-25">
				<?php if(strpos($focus, 'Animal') !== false): ?>
					<div class="icon animal"><a href="#"></a></div>
				<?php endif; ?>
				<?php if(strpos($focus, 'People') !== false): ?>
					<div class="icon people"><a href="#"></a></div>
				<?php endif; ?>
				<?php if(strpos($focus, 'Environment') !== false): ?>
					<div class="icon enviro"><a href="#"></a></div>
				<?php endif; ?>
			</div>

			<div class="icons-bg"></div>
		</div>
	</div> <!-- /image-icons -->

	<div class="details">
		<h1><?php print $fields['title']->content; ?></h1>
		<div class="stats">
			<span class="date"><?php print $fields['created']->content; ?></span>&bull;
			<span class="type"><a href="#"><?php print $fields['type']->content; ?></a></span>
			<?php if($fields['comment_count']->content): ?>
				&bull;<span class="comments"><a href="#comments">comments <?php print $fields['comment_count']->content; ?></a></span>
			<?php endif; ?>
			</div>
			<div class="author">
				<?php if($fields['field_charity_name']->content): ?>
					posted by: <a href="/fc/charity/<?php print $fields['name']->content; ?>"><?php print $fields['field_charity_name']->content; ?></a>
				<?php else: ?>
					posted by: <a href="/fc/user/<?php print $fields['name']->content; ?>"><?php print $fields['field_user_name']->content; ?></a>
				<?php endif; ?>
		</div> 
	</div><!-- /details --> 
</div> <!-- /teaser-small --> 