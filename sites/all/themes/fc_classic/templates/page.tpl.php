<?php 
 global $user;
?>

<div id="main-header">
	<div id="header-inner">
		
		<div id="user-nav">
			<ul>
			<?php if(!user_is_logged_in()): ?>
				<li><a id="login-btn" href="#" class="show-login">sign up / login</a></li>
			<?php else: ?>
				<li>
					<a href="<?php print $user->profile_path; ?>">my profile</a>
					<ul>
						<li><a href="<?php print '/user/' . $user->uid . '/edit/' . $user->user_type; ?>">edit my profile</a></li>
						<li><a href="<?php print '/user/' . $user->uid . '/edit'; ?>">edit my account</a></li>
						<li><a href="/cart">my cart</a></li>
					</ul>
				</li>
				<li>
					<a href="/add-content">add content</a>
					<ul>
						<?php if($user->user_type == 'charity'): ?>
							<li><a href="/node/add/news">add news</a></li>
							<li><a href="/node/add/event">add events</a></li>
							<li><a href="/node/add/pictures">add pictures</a></li>
							<li><a href="/node/add/video">add a video</a></li>
							<li><a href="/node/add/need">add needs</a></li>
							<li><a href="/node/add/project">add a project</a></li>
						<? else: ?>
							<li><a href="/node/add/article">add a article/story</a></li>
							<li><a href="/node/add/pictures">add some pictures</a></li>
							<li><a href="/node/add/event">add an event</a></li>
							<li><a href="/node/add/video">add a video</a></li>
						<?php endif; ?>
					</ul>
				</li>
				<li><a href="/user/logout">log out</a></li>
			<?php endif; ?>
			</ul>
		</div>
		
		<div id="logo"><a href="/"><img src="<?php print $logo; ?>" /></a></div>
		
		
		<?php print render($page['header']); ?>
	</div>
</div>
	
<div id="container" class="clearfix">
	<?php if ($messages): ?>
	 <div id="messages"><div class="section clearfix">
	   <?php print $messages; ?>
	 </div></div> <!-- /.section, /#messages -->
	<?php endif; ?>	
	<?php if ($tabs): ?>
	     <div class="tabs">
	       <?php print render($tabs); ?>
	     </div>
	   <?php endif; ?>
	
  
	<?php if ($page['sidebar_first']): ?>
		<div class="sideleft clearfix">
			<div class="side-content">
				<?php print render($page['sidebar_first']); ?>
			</div>
			<div class="main-content">
			<?php if ($title): ?>
			 <div class="page-header">
			   <h2><?php print $title; ?></h2>
			 </div>
			<?php endif; ?>
				<?php print render($page['content']); ?>
			</div>
		</div>
	<?php else: ?>
	<?php if ($title123): ?>
			 <div class="page-header">
			   <h2><?php print $title; ?></h2>
			 </div>
			<?php endif; ?>
		<?php print render($page['content']); ?>
	<?php endif; ?>
	
	<div class="push"></div>	
</div>

<div id="footer" class="clearfix">
	<div id="footer-main" class="clearfix">
		<?php if($page['footer_left']): ?>
		<div id="footer-left" class="clearfix">
			<?php print render($page['footer_left']); ?>
		</div>
		<?php endif; ?>
		<?php if($page['footer_middle']): ?>
		<div id="footer-middle" class="clearfix">
			<?php print render($page['footer_middle']); ?>
		</div>
		<?php endif; ?>
		<?php if($page['footer_right']): ?>
		<div id="footer-right" class="clearfix">
			<?php print render($page['footer_right']); ?>
		</div>
		<?php endif; ?>
	</div>
	<div id="footer-bottom" class="clearfix">
		&copy; 2010 Fresh Charities. <?php print render($page['footer_bottom']); ?>
	</div>
</div>





