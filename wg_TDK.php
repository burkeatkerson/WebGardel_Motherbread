<? //WebGardel theme development kit ?>

<?php
    include_once('sbwebsite.php');
    $site = new SBWebsite();
	
// facebook 

$fb_id = $site->data('fb_id');
$albumid = '281475991951856'; //if want a specific album
$contents = file_get_contents('http://graph.facebook.com/'.$site->data('fb_id').'/photos/uploaded?limit=12');
$photos = json_decode($contents,true);
$photos = $photos['data'];

$get_fb_photo_cover = file_get_contents('https://graph.facebook.com/'.$site->data('fb_id').'?fields=cover');
$decode_photo_cover = json_decode($get_fb_photo_cover);
$cover_image = $decode_photo_cover->cover ->source;
$fb_cover_photo = '<div style="max-height:500px; overflow:hidden;"><img class="rsImg" src="'.$cover_image.'" alt="'.$site->data('company_name').'" /></div>';


//facebook widgets
$fb_widget = array(
	'likebutton' 			=>	'<div class="fb-like" data-href="http://www.facebook.com/'.$fb_id.'"  data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>',
	'followbutton' 			=>	'<div class="fb-follow" data-href="http://www.facebook.com/'.$fb_id.'" data-width="250" data-height="250" data-colorscheme="light" data-layout="button_count" data-show-faces="true"></div>',
	'followbox_standard' 	=>	'<div class="fb-follow" data-href="http://www.facebook.com/'.$fb_id.'" data-width="250" data-height="250" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>',
	'sharebutton_box_small' 	=>	'<div class="fb-share-button" data-href="http://www.facebook.com/'.$fb_id.'" data-type="box_count"></div>',
	'sharebutton' 			=>	'<div class="fb-share-button" data-href="http://www.facebook.com/'.$fb_id.'" data-type="button"></div>',
	'sharebutton_horiz' 		=>	'<div class="fb-share-button" data-href="http://www.facebook.com/'.$fb_id.'" data-type="button_count"></div>',
	'comments' 				=>	'<div class="fb-comments" data-href="http://www.facebook.com/'.$fb_id.'" data-width="590" data-numposts="12" data-colorscheme="light"></div>',
	'likebox' 				=>	'<div class="fb-like-box" data-href="http://www.facebook.com/'.$fb_id.'" data-width="300" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>',
	'likebox_tall' 			=>	'<div class="fb-like-box" data-href="http://www.facebook.com/'.$fb_id.'" data-width="300" data-height="650" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>',
	'cover_photo'			=> '<div style="width:100%; height:280px; background:url('.$cover_image.'); background-position:center top; background-size: cover; overflow:hidden; margin: -20px auto 0 auto; zoom:1; -ms-background-position-x: center; -ms-background-position-y: top;"></div>',
	'prof_pic'				=> '<img src="http://graph.facebook.com/'. $fb_id .'/picture?type=large" style="border-radius:15px;"/>',
	'prof_pic_custom'		=> '<img src="http://graph.facebook.com/'. $fb_id .'/picture?type=large" style="max-width:150px; max-height:120px; border-radius:15px;"/>',
	'prof_pic_small'		=>	'<img src="http://graph.facebook.com/'. $fb_id .'/picture" style="border-radius:5px; float:left; margin:5px 15px 5px 0;"/>'
	);


//facebook feed
$settings = array(
    // Enter license key below. Lost the license? Contact Smash Balloon at http://smashballoon.com/custom-facebook-feed/support
    'license' => 'b8f834ddfb9028f0d6f4ce4dfe344340',
	'id' => $fb_id,
    // Optional: Enter your Facebook Access Token below. If you don't have an Access Token then you can get one by following these simple steps: http://smashballoon.com/custom-facebook-feed/access-token/
    'access_token' => 'OPTIONAL_ACCESS_TOKEN_HERE',
    // Is the Facebook feed from a page or a group?
    'pagetype'          => 'page',  // 'page' or 'group'
    'layout' 			=> 'half',
    'number' 			=> '5',
	'limit' 				=> '8',
	'width' 				=> '100%',
	'showpostsby'	 	=> 'others',
	'eventsource' 		=> 'timeline',
	'eventimage' 		=> 'full',
	'datepos' 			=> 'above',
	'likebox' 			=> 'bottom',
	'likeboxfaces' 		=> 'true',
	'seemoretext' 		=> 'Leer más',
	'seelesstext' 		=> 'Menos',
	'facebooklinktext' 	=> 'Ver en Facebook',
	'second' 			=> 'segundo',
	'seconds' 			=> 'segundos',
	'minute' 			=> 'minuto',
	'minutes' 			=> 'minutos',
	'hour' 				=> 'hora',
	'hours' 				=> 'horas',
	'day' 				=> 'día',
	'days' 				=> 'días',
	'year' 				=> 'año',
	'years' 				=> 'años',
	'ago' 				=> 'en el pasado',
	'textbeforedate' 	=> 'Subido',
    // Don't remove the line below. It is required.
    'path'	=> isset($fbfeed_path) ? $fbfeed_path : ''
);


// google maps iframe
$gmaps_iframe = '<iframe src="'.$site->data('gmaps_embed_url').'" width="100%" height="100%" frameborder="0" style="border:0;"></iframe>';


// main menu
$navigation = array(
	'menu_li_1' => 'inicio',
	'menu_li_2' => 'nosotros',
	'menu_li_3' => 'contacto',
	'menu_li_4' => 'fotos',
	'menu_li_5' => 'novedades',
	'menu_li_6' => 'más info',
	'menu_li_7' => 'dirección',
	);

if ($navigation['menu_li_1'] != 'inicio') {
	$menu_item1 = '<a href="#'.$navigation['menu_li_1'].'">'.$navigation['menu_li_1'].'</a>';
	}
	else {
	$menu_item1 = '<a href="./">'.$navigation['menu_li_1'].'</a>';
	}
$menu_item2 = '<a href="#'.$navigation['menu_li_2'].'">'.$navigation['menu_li_2'].'</a>';
$menu_item3 = '<a href="#'.$navigation['menu_li_3'].'">'.$navigation['menu_li_3'].'</a>';
$menu_item4 = '<a href="#'.$navigation['menu_li_4'].'">'.$navigation['menu_li_4'].'</a>';
$menu_item5 = '<a href="#'.$navigation['menu_li_5'].'">'.$navigation['menu_li_5'].'</a>';
$menu_item6 = '<a href="#'.$navigation['menu_li_6'].'">'.$navigation['menu_li_6'].'</a>';
$menu_item7 = '<a href="#'.$navigation['menu_li_7'].'">'.$navigation['menu_li_7'].'</a>';

$menu_item_li = "<li>$menu_item1</li><li>$menu_item2</li><li>$menu_item3</li><li>$menu_item4</li><li>$menu_item5</li><li>$menu_item6</li><li>$menu_item7</li>";

//accent color option. important.
$color_accent = $site->option('color');


