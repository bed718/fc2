<div class="teaser <?php print $teaser_class; ?>">
	<?php if($thumbnail): ?>
	<div class="image-icons">
		
		<div class="image">
			<a href="<?php print $node_url; ?>"><?php print $thumbnail; ?></a>
		</div>
		
		<div class="icons">
			<div class="icon-type icons-30">
				<div class="icon <?php print $type; ?>"><a href="#"></a></div>
			</div>
			<div class="icon-focus  icons-25">
				<?php if($animal_focus): ?>
					<div class="icon animal"><a href="#"></a></div>
				<?php endif; ?>
				<?php if($enviro_focus): ?>
					<div class="icon enviro"><a href="#"></a></div>
				<?php endif; ?>
				<?php if($people_focus): ?>
					<div class="icon people"><a href="#"></a></div>
				<?php endif; ?>
			</div>
			<div class="icons-bg"></div>
		</div>
	</div> <!-- /image-icons --> 
	<?php endif; ?>
	<div class="details">
		<h1><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
		<div class="stats">
			<?php if($type == 'event'){print $event_date;}else{print $created;} ?> &bull;
			<?php if($event_city || $event_state): ?>
				<span class="event-location"><?php print $event_city; ?> <?php print $event_state; ?></span> &bull;
			<?php endif; ?>
			<a href="/fc/type/<?php print $type; ?>"><?php print $type; ?></a>
		</div>
		<div class="author">
			by: <a href="/fc/<?php print $profile_type; ?>/<?php print $node->name; ?>"><?php print $profile_name; ?></a>
		</div>
	</div><!-- /details --> 
</div> <!-- /teaser-small --> 