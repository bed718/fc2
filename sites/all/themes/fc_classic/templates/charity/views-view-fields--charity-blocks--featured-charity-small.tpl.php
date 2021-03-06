<?php 
	if($fields['field_charity_volunteer']->content){
		$time_link = $fields['field_charity_volunteer']->content;
	}else{
		$time_link = $fields['field_charity_website']->content;
	}
	
	if($fields['field_charity_donations']->content){
		$time_link = $fields['field_charity_donations']->content;
	}else{
		$time_link = $fields['field_charity_website']->content;
	}
	
	$focus = $fields['field_focus']->content;
?>

<div class="teaser">
	<div class="section-header-inset">
		<h2>Featured Charity</h2>
	</div>
	<div class="image-icons">
		<div class="image">
			<a href="/charity/<?php print $fields['name']->content; ?>"><?php print $fields['field_charity_profile_image']->content; ?></a>
		</div>
		<div class="icons">
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
		<h1><a href="/charity/<?php print $fields['name']->content; ?>"><?php print $fields['field_charity_name']->content; ?></a></h1>
		<div class="mission"><span class="q-mark">&ldquo;</span><?php print $fields['field_charity_mission_short']->content; ?><span class="q-mark">&rdquo;</span></div>
	</div><!-- /details --> 
</div> <!-- /teaser-featured-charity --> 