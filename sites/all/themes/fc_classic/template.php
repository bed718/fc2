<?php

/** 
 * @file
 * template.php for FC Classic theme.
 * 
 * Implements preprocess and hook alter functions in this file.
 */
 
 
/**
 * Preprocess functions for page.tpl.php.
 */

function fc_classic_preprocess_page(&$vars){
	if(isset($vars['user']->roles[4])){
		$vars['user']->user_type = 'charity';
	}else{
		$vars['user']->user_type = 'user';
	}
	
	$vars['user']->profile_path = '/fc/' . $vars['user']->user_type . '/' . $vars['user']->name;
	//kpr($vars);
}
 

/**
 * Preprocess functions for node.tpl.php.
 */
 
function fc_classic_preprocess_node(&$vars){

	$node = $vars['node'];
	//dpm($vars);
	
	if($vars['view_mode'] == 'fc_teaser_detail'){
		$vars['theme_hook_suggestions'][] = 'node__teaser_detail';
	}
	
	if($vars['teaser']){
		$profile = profile2_load_by_user($vars['uid']);
		if($profile['charity']){
			$vars['profile_type'] = t('charity');
			$vars['profile_name'] = $profile['charity']->field_charity_name['und'][0]['value'];
			if($profile['charity']->field_charity_profile_image['und'][0]['uri']){
				$profile_image = $profile['charity']->field_charity_profile_image['und'][0]['uri'];
			}
		}else{
			$vars['profile_type'] = t('user');
			$vars['profile_name'] = $profile['user']->field_user_name['und'][0]['value'];
			if($profile['user']->field_user_profile_image['und'][0]['uri']){
				$profile_image = $profile['user']->field_user_profile_image['und'][0]['uri'];
			}
		}
		
		$vars['theme_hook_suggestions'][] = 'node__teaser';
		
// GET the image data
		if($vars['type'] == 'article' && isset($node->field_article_images['und'])){
			$image = $node->field_article_images['und'][0];
		}elseif($vars['type'] == 'event' && isset($node->field_event_images['und'])){
			$image = $node->field_event_images['und'][0];
		}elseif($vars['type'] == 'need' && isset($node->field_need_images['und'])){
			$image = $node->field_need_images['und'][0];
		}elseif($vars['type'] == 'news' && isset($node->field_news_images['und'])){
			$image = $node->field_news_images['und'][0];
		}elseif($vars['type'] == 'pictures' && isset($node->field_picture_images['und'])){
			$image = $node->field_picture_images['und'][0];
		}elseif($vars['type'] == 'project' && isset($node->field_project_images['und'])){
			$image = $node->field_project_images['und'][0];
		}elseif($vars['type'] == 'video' && isset($node->field_video_url['und'])){
			$image = $node->field_video_url['und'][0];
		}elseif($profile_image){
			$image = $profile_image;
		}else{
			$image = 'FC_no_image.jpg';
		}
		
		if(isset($image)){
			if($vars['type'] == 'video'){
				$thumb_style = array( 'style_name' => 'teaser_small', 'path' => $image['thumbnail_path']);
			}else{
				$thumb_style = array( 'style_name' => 'teaser_small', 'path' => $image['uri'], 'alt' => $image['alt'], 'title' => $image['title'],);
			}
			
			$vars['thumbnail'] = theme('image_style', $thumb_style);
		}else{
			$vars['thumbnail'] = FALSE;
		}
		
// GET the focus data
		$vars['animal_focus'] = $vars['enviro_focus'] = $vars['people_focus'] = FALSE;
		if(isset($node->field_focus)){
			$focus = $node->field_focus['und'];
			
			for($i = 0; $i < count($focus); $i++){
				if(in_array('1', $focus[$i] )){
					$vars['animal_focus'] = TRUE;
				}
				if(in_array('2', $focus[$i] )){
					$vars['enviro_focus'] = TRUE;
				}
				if(in_array('3', $focus[$i] )){
					$vars['people_focus'] = TRUE;
				}
			}
			unset($i);
		}
		
		if($vars['type'] == 'event'){
			$date = date_create($node->field_event_date['und'][0]['value']);
			$vars['created'] = ' on: ' . date_format($date, 'n/j/y');
		}else{
			$vars['created'] =  format_date($node->created, 'custom', 'n/j/y');
		}
		
		
		
		//dpm($node);	
		//dpm($profile);	
	
	}else{
		//kpr($vars);
	}
	//$profile = profile2_load_by_user($vars['uid']);
	//kpr($profile);
	
}

function fc_classic_preprocess_comment(&$vars){	
	$profile = profile2_load_by_user($vars['elements']['#comment']->uid);
	if($profile['user']){
		$profile_image = $profile['user']->field_user_profile_image['und'][0]['uri'];
	}elseif($profile['charity']){
		$profile_image = $profile['charity']->field_charity_profile_image['und'][0]['uri'];
	}
	
	if($profile_image){
		$thumb_style = array( 'style_name' => 'tiny', 'path' => $profile_image, 'alt' => 'profile image',);
		$vars['picture'] = theme('image_style', $thumb_style);
	}else{
		$vars['picture'] = null;
	}
	
			
	$date = date_create($vars['created']);
	$vars['created'] = date_format($date, 'n/j/y g:i');
	$vars['submitted'] = t('From ') . $vars['author'] . t(' on ') . $vars['created'];
	$vars['body'] = render($vars['comment']->comment_body['und'][0]['safe_value']);
	$vars['links'] = render($vars['content']['links']);
	//kpr($vars);
}



function fc_classic_theme(&$existing, $type, $theme, $path) {
	$hooks['user_login_block'] = array(
		'template' => 'templates/user-login-block',
		'render element' => 'form',
	);
	
	return $hooks;
}

function fc_classic_preprocess_user_login_block(&$vars) {
	//kpr($vars);
	
	$vars['form']['name']['#title'] = t('Email');
	
	$vars['name'] = render($vars['form']['name']);
	$vars['pass'] = render($vars['form']['pass']);
	$vars['submit'] = render($vars['form']['actions']['submit']);
	unset($vars['form']['links']);
	$vars['rendered'] = drupal_render_children($vars['form']);
}

function fc_classic_preprocess_user_register(&$vars) {
	
	if($vars['form']['profile_user']){
		$vars['form']['account']['name']['#description'] = t('This will be the path to your personal profile. <br />eg. http://freshcharities.com/user/[ your_custom_url ]');
		unset($vars['form']['profile_user']['field_user_profile_image']);
		$vars['form']['profile_user']['field_uesr_zip']['und'][0]['postal_code']['#title'] = t('Zipcode');
		$vars['form']['profile_user']['field_uesr_zip'] = $vars['form']['profile_user']['field_uesr_zip']['und'][0]['postal_code'];
		$vars['profile'] = drupal_render($vars['form']['profile_user']);

	}elseif($vars['form']['profile_charity']){
		$vars['form']['account']['name']['#description'] = t('This will be the path to the charity profile. <br />eg. http://freshcharities.com/charity/[ your_custom_url ]');
		unset($vars['form']['profile_charity']['field_charity_mission_full']['und'][0]['format']);
		$vars['profile'] = drupal_render($vars['form']['profile_charity']);
	}
	
	$vars['captcha'] = drupal_render($vars['form']['captcha']);
	$vars['submit'] = drupal_render($vars['form']['actions']['submit']);
	$vars['rendered'] = drupal_render_children($vars['form']);
}


/**
 * Preprocess functions for user-login.tpl.php.
 */
function fc_classic_form_user_login_alter(&$form) {
	//kpr($form);
	$form['name']['#title'] = t('Email');
	unset($form['name']['#description']);
	$form['pass']['#description'] = '<a href="/user/password">Forgot your password?</a>';
}


function fc_classic_fieldset($variables) {
  $element = $variables['element'];
  element_set_attributes($element, array('id'));
  _form_set_class($element, array('form-wrapper'));

  $output = '<fieldset' . drupal_attributes($element['#attributes']) . '>';
  if (!empty($element['#title'])) {
    // Always wrap fieldset legends in a SPAN for CSS positioning.
    $output .= '<div class="legend"><span class="fieldset-legend">' . $element['#title'] . '</span></div>';
  }
  $output .= '<div class="fieldset-wrapper">';
  if (!empty($element['#description'])) {
    $output .= '<div class="fieldset-description">' . $element['#description'] . '</div>';
  }
  $output .= $element['#children'];
  if (isset($element['#value'])) {
    $output .= $element['#value'];
  }
  $output .= '</div>';
  $output .= "</fieldset>\n";
  return $output;
}

function fc_classic_preprocess_search_results(&$vars) {
	
 	 $chunks = array_chunk($vars['results'], 3);
 	 
 	 $vars['search_results'] = '';
 	 
 	 foreach ($chunks as $each_chunk) {
 	 	$vars['search_results'] .= '<tr>';
 	 	foreach ($each_chunk as $result) {
	 		$vars['search_results'] .= theme('search_result', array('result' => $result, 'module' => $vars['module']));
 		 }
 	 	$vars['search_results'] .= '</tr>';
 	 }
	
	
	//dpm($vars['search_results']);
	
	//$vars['result_0'] = drupal_render($vars['results']);
	
}

function fc_classic_preprocess_search_result(&$vars) {
	//kpr($vars);
	$fields = $vars['result']['fields'];
	
	if($fields['zs_teaser_image']){
		$image = $fields['zs_teaser_image'];
		$thumb_style = array( 'style_name' => 'thumbnail', 'path' => $image, 'alt' => $vars['title'],);
	}elseif($fields['zs_profile_image']){
		$image = $fields['zs_profile_image'];
		$thumb_style = array( 'style_name' => 'profile_thumbnail', 'path' => $image, 'alt' => $vars['title'],);
	}else{
		$image = 'FC_no_image.jpg';
		$thumb_style = array( 'style_name' => 'thumbnail', 'path' => $image, 'alt' => $vars['title'],);
	}
	
	
	$vars['animal_focus'] = $vars['enviro_focus'] = $vars['people_focus'] = FALSE;
		if(isset($fields['im_field_focus'])){
			$focus = $fields['im_field_focus'];
			for($i = 0; $i < count($focus); $i++){
				if($focus[$i] == 1 ){
					$vars['animal_focus'] = TRUE;
				}
				if($focus[$i] == 2 ){
					$vars['enviro_focus'] = TRUE;
				}
				if($focus[$i] == 3 ){
					$vars['people_focus'] = TRUE;
				}
			}
			unset($i);
		}
	
	$vars['created'] = format_date($fields['created'], 'custom', 'n/j/y');
	
	$vars['thumbnail'] = theme('image_style', $thumb_style);;
	$vars['type'] = $vars['result']['bundle'];
	
	$vars['profile_type'] = $vars['result']['fields']['ss_profile_type'];
	$vars['profile_name'] = $vars['result']['fields']['ss_profile_name'];
	$vars['user_name'] = $vars['result']['fields']['ss_user_name'];
	$vars['comment_count'] = $vars['result']['fields']['is_comment_count'];
	$vars['mission_short'] = $vars['result']['fields']['ss_mission_short'];
	
	//dpm($vars['result']['fields']);
}













