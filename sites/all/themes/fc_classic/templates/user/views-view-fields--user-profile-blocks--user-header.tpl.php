<?php 
	$focus = $fields['field_focus']->content;
?>

<div class="profile-header user-header">
	<div class="image">
		<a href="/user/<?php print $fields['name']->content; ?>"><?php print $fields['field_user_profile_image']->content; ?></a>
		<div class="icons">
			<div class="icon-focus icons-25">
				<?php if(strpos($focus, 'Animal') !== false): ?>
					<div class="icon animal"><a href="/animals"></a></div>
				<?php endif; ?>
				<?php if(strpos($focus, 'People') !== false): ?>
					<div class="icon people"><a href="/people"></a></div>
				<?php endif; ?>
				<?php if(strpos($focus, 'Environment') !== false): ?>
					<div class="icon enviro"><a href="/environment"></a></div>
				<?php endif; ?>
			</div>
			<div class="icons-bg"></div>
		</div>
		
	</div>
	<div class="details">
		<h1><a href="#"><?php print $fields['field_user_name']->content; ?></a></h1>
		
		<div class="nav-give">
			<div class="nav">
				<a href="/user/<?php print $fields['name']->content; ?>">Overview</a>
				<a href="/user/<?php print $fields['name']->content; ?>/my-posts">my posts</a>
				<a href="/user/<?php print $fields['name']->content; ?>/saved-events">saved events</a>
				<a href="/user/<?php print $fields['name']->content; ?>/followed-charities">followed charities</a>
			</div>			
		</div>
	</div>
</div>