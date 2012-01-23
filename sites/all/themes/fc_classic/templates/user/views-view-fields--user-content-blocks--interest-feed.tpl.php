<?php 
	if($fields['field_event_flyer']->content){
		$image = $fields['field_event_flyer']->content;
	
	}elseif($fields['field_event_images']->content){
		print $fields['field_event_images']->content;
		
	}elseif($fields['field_picture_images']->content){
		$image =  $fields['field_picture_images']->content;
	
	}elseif($fields['field_news_images']->content){
		$image =  $fields['field_news_images']->content;
	
	}elseif($fields['field_need_images']->content){
		$image =  $fields['field_need_images']->content;
	
	}elseif($fields['field_project_images']->content){
		$image =  $fields['field_project_images']->content;
	
	}elseif($fields['field_article_images']->content){
		$image =  $fields['field_article_images']->content;
	
	}elseif($fields['field_video_url']->content){
		$image =  $fields['field_video_url']->content;
	
	}elseif($fields['field_user_profile_image_1']->content){
		$image =  $fields['field_user_profile_image_1']->content;
	
	}else{
		$image =  $fields['field_charity_profile_image_1']->content;
	}
	
	if($fields['field_user_name']->content){
		$profile_name =  $fields['field_user_name']->content;
	}else{
		$profile_name =  $fields['field_charity_name']->content;
	}
	
	if($fields['field_user_profile_image']->content){
		$profile_image =  $fields['field_user_profile_image']->content;
	}else{
		$profile_image =  $fields['field_charity_profile_image']->content;
	}
	
	//print $fields['field_charity_profile_image_1']->content;
		
	$focus = $fields['field_focus']->content;
?>
<div class="teaser-details teaser">
	
	<div class="image-icons">
		<div class="image">
			<?php print $image; ?>
		</div>
		<div class="icons">
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
			<span class="date"><?php print $fields['created']->content; ?></span>
			<span class="type"><a href="#"><?php print $fields['type']->content; ?></a></span>
<!-- 			<span class="comments"><a href="<?php //print $node_url; ?>#comments">comments <?php //print $comment_count; ?></a></span> -->
		</div> 
		
		
	</div><!-- /details --> 
	<div class="charity-details clearfix">
			<div class="charity-image">
				<?php print $profile_image; ?>
			</div>
			<h3><?php print $profile_name; ?></h3>
		</div>
</div> <!-- /teaser-small --> 





