<?php 
	$focus = $fields['field_focus']->content;
?>

<div class="profile-header user-header">
	<div class="image">
		<a href="/fc/user/<?php print $fields['name']->content; ?>"><?php print $fields['field_user_profile_image']->content; ?></a>
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
		
	</div>
	<div class="details">
		<h1><a href="#"><?php print $fields['field_user_name']->content; ?></a></h1>
		
		<div class="nav-give">
			<div class="nav">
				<a href="/fc/user/<?php print $fields['name']->content; ?>">Overview</a>
				<a href="/fc/user/<?php print $fields['name']->content; ?>/news">news</a>
				<a href="/fc/user/<?php print $fields['name']->content; ?>/events">events</a>
				<a href="/fc/user/<?php print $fields['name']->content; ?>/videos">videos</a>
				<a href="/fc/user/<?php print $fields['name']->content; ?>/pictures">pictures</a>
				<a href="/fc/user/<?php print $fields['name']->content; ?>/projects">projects</a>
				<a href="/fc/user/<?php print $fields['name']->content; ?>/saved events">needs</a>
			</div>			
		</div>
	</div>
</div>