<div id="w-page">
	
	<div id="w-main-content">
		<div class="w-header">
			<h1><a href="/daily-fresh">Fresh Charities</a></h1>
			<h2><a href="/daily-fresh">The Social Network for Social Change</a></h2>
		</div>
		
		
		<div id="w-video">
		
		</div>
		<div id="w-signup-btns">
			<div id="w-signup">Sign up</div>
			<div id="w-arrow"><img src="/<?php print path_to_theme(); ?>/images/FC_signup_arrow.png" /></div>
			<div id="w-user"><a href="/user/register">User</a></div>
			<div id="w-or">or</div>
			<div id="w-charity"><a href="/charity/register">Charity</a></div>
		</div>
	</div>
	
	<div id="w-side-content">
		<div id="w-icons" class="icons">
			<div class="icon-focus  icons-70">
				<div class="icon animal basic-tip" title="<div class='arrow'></div>animals"><a href="/animals"></a></div>
				<div class="icon enviro basic-tip" title="<div class='arrow'></div>environment"><a href="/environment"></a></div>
				<div class="icon people basic-tip" title="<div class='arrow'></div>people"><a href="/people"></a></div>
			</div>
		</div>
		
		<div id="w-you"><img src="/<?php print path_to_theme(); ?>/images/welcome/FC_w_arrows.png" /></div>
		<div id="w-login-block">
			<?php
				print drupal_render(drupal_get_form('user_login'));
			?>
		</div>
	</div>
	
	<div id="w-quote">
		<span class="quote-mark">&ldquo;</span>Give until it feels good...<span class="quote-mark">&rdquo;</span>
	</div>
	
	<div id="w-who" class="w-side-info">Who <img src="/<?php print path_to_theme(); ?>/images/welcome/FC_w_right_arrow.png" /></div>
	<div id="w-what" class="w-side-info">What <img src="/<?php print path_to_theme(); ?>/images/welcome/FC_w_right_arrow.png" /></div>
	<div id="w-why" class="w-side-info">Why <img src="/<?php print path_to_theme(); ?>/images/welcome/FC_w_right_arrow.png" /></div>
	
	<div id="w-find" class="w-side-info w-right">Find <img src="/<?php print path_to_theme(); ?>/images/welcome/FC_w_left_arrow.png" /></div>
	<div id="w-login" class="w-side-info w-right">Login <img src="/<?php print path_to_theme(); ?>/images/welcome/FC_w_left_arrow.png" /></div>
	
	<div class="w-push"></div>
	
</div>

<div id="w-footer">
	&copy; Fresh Charities 2012
</div>



<script>
	jQuery(document).ready(function(){
		jQuery('#w-who').delay(2000).animate({opacity: 1}, 1000);
		jQuery('#w-what').delay(3000).animate({opacity: 1}, 1000);
		jQuery('#w-why').delay(4000).animate({opacity: 1}, 1000);
		jQuery('#w-find').delay(5000).animate({opacity: 1}, 1000);
		jQuery('#w-login').delay(6000).animate({opacity: 1}, 1000);
	});
</script>






