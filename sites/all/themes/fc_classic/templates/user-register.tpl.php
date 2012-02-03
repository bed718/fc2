<div class="user-register sideleft-big clearfix">
	
	
	<div class="side-content">
		<div class="reg-icons">
			<div class="icons icons-52 main-focus">
			   <div class="icon animal top-tip" title="<div class='arrow'></div>animals"><a href="/animals"></a></div>
			   <div class="icon enviro top-tip" title="<div class='arrow'></div>environment"><a href="/environment"></a></div>
			   <div class="icon people top-tip" title="<div class='arrow'></div>people"><a href="/people"></a></div>
			</div>
		</div>
		
		<?php if($reg_type == 'user'): ?>
			<img src="/<?php print path_to_theme(); ?>/images/FC_signup_user_header.png" />
		<?php else: ?>
			<img src="/<?php print path_to_theme(); ?>/images/FC_signup_charity_header.png" />
		<?php endif; ?>
		
		<div class="dark-box">
			Wait, I wanted to sign up as a
			<?php if($reg_type == 'user'): ?>
				charity. <a href="/charity/register">(CLICK HERE)</a>
			<?php else: ?>
				user. <a href="/user/register">(CLICK HERE)</a>
			<?php endif; ?>
		</div>
		
		<img src="/<?php print path_to_theme(); ?>/images/FC_signup_why.png" />
		
		<?php if($reg_type == 'user'): ?>
			<img src="/<?php print path_to_theme(); ?>/images/FC_signup_user_why.png" />
			<ul class="list-med">
				<li><span>Find, follow, and interact with fresh charities</li>
				<li><span>Create and update a personal profile</li>
				<li><span>Share tips about smart and effective giving</li>
				<li><span>Get updates from charities that resonate</li>
				<li><span>Learn how to help your favorite charities</li> 
				<li><span>It's free!</li> 
			</ul>
		<?php else: ?>
			<img src="/<?php print path_to_theme(); ?>/images/FC_signup_charity_why.png" />
			<ul class="list-med">
				<li><span>Create, maintain and update a charity profile</span></li>
				<li><span>Post updates, videos, pictures, and events</span></li>
				<li<span>>Increase visibility, awareness, and activity</span></li>
				<li><span>Share essential facts about the organization</span></li>
				<li><span>Connect with a public excited about charitable giving</span></li>
				<li><span>It's free!</li>
			</ul>
		<?php endif; ?>
		
		
		
		
	</div>
	
	<div class="main-content">
		<fieldset id="account-info" class="field-group-fieldset group-user-details required-fields  form-wrapper">
			<legend class="legend"><span class="fieldset-legend">Account Info</span></legend>
			<?php print $rendered; ?>
		</fieldset>
		
		<?php print $zipcode; ?>
		<?php print $profile; ?>
		
		<?php print $captcha; ?>
		<div class="submit">
		<?php print $submit; ?>
		</div>
	</div>

</div>