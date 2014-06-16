<!--  Snippets for converting a template into a WebGardel theme -->

<!-- Paste at the very top of the index page -->
<?php
    include_once('sbwebsite.php');
    $site = new SBWebsite();
	
?>

<!-- Paste after the closed head tag before body tag fpr fbFeed plugin -->
<?php $fbfeed_path = 'fbfeed';
include $fbfeed_path . '/fbfeed-settings.php'; ?>


<!-- Facebook, Maps, Menus FUNCTIONALITY & strings - paste right after the body tag -->
<? //Webgardel theme functionality ?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=254432444736316&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
$('#cff .cff-item').each(function(){
  var $self = $(this),
  $cffphoto = $self.find('.cff-photo');
  $cffphoto.detach();
  $self.find('.cff-post-text').before($cffphoto);
});</script>
<? $fb_likebutton = '<div class="fb-like" data-href="'.$site->data('fb_page_url').'"  data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>'; 
$fb_followbox_standard = '<div class="fb-follow" data-href="'.$site->data('fb_page_url').'" data-width="250" data-height="250" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>';
$fb_followbutton = '<div class="fb-follow" data-href="'.$site->data('fb_page_url').'" data-width="250" data-height="250" data-colorscheme="light" data-layout="button_count" data-show-faces="true"></div>';
$fb_sharebutton_box_small = '<div class="fb-share-button" data-href="'.$site->data('fb_page_url').'" data-type="box_count"></div>';
$fb_sharebutton = '<div class="fb-share-button" data-href="'.$site->data('fb_page_url').'" data-type="button"></div>'; 
$fb_sharebutton_horiz = '<div class="fb-share-button" data-href="'.$site->data('fb_page_url').'" data-type="button_count"></div>';
$fb_comments = '<div class="fb-comments" data-href="http://www.facebook.com/webgardel" data-width="590" data-numposts="12" data-colorscheme="light"></div>';
$fb_likebox = '<div class="fb-like-box" data-href="'.$site->data('fb_page_url').'" data-width="300" data-height="600" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>';
$gmaps_iframe = '<iframe src="'.$site->data('gmaps_embed_url').'" width="100%" height="100%" frameborder="0" style="border:0;"></iframe>';
$menu_li_1 = 'inicio';
$menu_li_2 = 'nosotros';
$menu_li_3 = 'contacto';
$menu_li_4 = 'fotos';
$menu_li_5 = 'novedades';
$menu_li_6 = 'más info';
$menu_li_7 = 'dirección';
$menu_li_8 = 'página de facebook';

if ($menu_li_1 != 'inicio') {
	$menu_item1 = '<a href="#'.$menu_li_1.'">'.$menu_li_1.'</a>';
	}
	else {
	$menu_item1 = '<a href="./">'.$menu_li_1.'</a>';
	}
$menu_item2 = '<a href="#'.$menu_li_2.'">'.$menu_li_2.'</a>';
$menu_item3 = '<a href="#'.$menu_li_3.'">'.$menu_li_3.'</a>';
$menu_item4 = '<a href="#'.$menu_li_4.'">'.$menu_li_4.'</a>';
$menu_item5 = '<a href="#'.$menu_li_5.'">'.$menu_li_5.'</a>';
$menu_item6 = '<a href="#'.$menu_li_6.'">'.$menu_li_6.'</a>';
$menu_item7 = '<a href="#'.$menu_li_7.'">'.$menu_li_7.'</a>';
$menu_item8 = '<a href="'.$site->data('fb_page_url').'" target="_blank">'.$menu_li_8.'</a>';

$fb_prof_pic = '<img src="http://graph.facebook.com/'. $site->data('fb_id') .'/picture?type=large" style="max-width:150px; max-height:120px; border-radius:15px;"/></a>';

$albumid = '281475991951856';
$contents = file_get_contents('http://graph.facebook.com//photos/uploaded?limit=12');
$photos = json_decode($contents,true);
$photos = $photos['data'];

$get_fb_photo_cover = file_get_contents('https://graph.facebook.com/'.$site->data('fb_id').'?fields=cover');
$decode_photo_cover = json_decode($get_fb_photo_cover);
$cover_image = $decode_photo_cover->cover ->source;
$fb_cover_photo = '<div style="max-height:400px; overflow:hidden;"><img class="rsImg" src="'.$cover_image.'" alt="'.$site->data('company_name').'" /></div>'

//end Webgardel theme functionality ?>


<!-- Paste at end for fbFeed plugin -->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $fbfeed_path ?>/core/js/cff.js"></script>




<!-- Copy and paste into navigation lists -->
<? echo $menu_item1; ?>
<? echo $menu_item2; ?>
<? echo $menu_item3; ?>
<? echo $menu_item4; ?>
<? echo $menu_item5; ?>
<? echo $menu_item6; ?>
<? echo $menu_item7; ?>
<? echo $menu_item8; ?>


<!-- Copy and paste specifically where you want the FACEBOOK WIDGET to show up -->
<? echo $fb_likebutton; ?>
<? echo $fb_followbox_standard; ?>
<? echo $fb_followbutton; ?>
<? echo $fb_sharebutton_box_small; ?>
<? echo $fb_sharebutton; ?>
<? echo $fb_sharebutton_horiz; ?>
<? echo $fb_comments; ?>
<? echo $fb_likebox; ?>
<? echo $fb_timeline; //facebook feed, nodevades, MURO, using socoaltimeline Plugin ?>
<? fbFeed($settings); //facebook feed, nodevades, MURO, timeline using fbFeedPlugin ?>  



<!-- Copy and paste for specific DATA -->
<?= $site->data('company_name') ?>
<?= $site->data('domain_name') ?>
<?= $site->data('fb_page_url') ?>
<?= $site->data('address') ?>
<?= $site->data('address2') ?>
<?= $site->data('business_phone') ?>
<?= $site->data('cell_phone') ?>
<?= $site->data('fax') ?>
<?= $site->data('business_email') ?>
<?= $site->data('gmaps_embed_url') ?>
<?= $site->data('fb_id') ?>
<?= $site->data('product_list') ?>
<?= $site->data('price_range') ?>

<?= $site->option('theme') ?>
<?= $site->option('color') ?>
<?= $site->option('color_scheme') ?>
<?= $site->option('font_family') ?>
<?= $site->option('photo_section_title') ?>
<?= $site->option('primary_language') ?>

<?= $site->content('mission') ?>
<?= $site->content('about') ?>
<?= $site->content('short_description') ?>
<?= $site->content('long_description') ?>
<?= $site->content('slogan_text') ?>
<?= $site->content('extra_text') ?>
<?= $site->content('extra_text_headline') ?>
<?= $site->content('hours_mon') ?>
<?= $site->content('hours_tue') ?>
<?= $site->content('hours_wed') ?>
<?= $site->content('hours_thu') ?>
<?= $site->content('hours_fri') ?>
<?= $site->content('hours_sat') ?>
<?= $site->content('hours_sun') ?>
<?= $site->content('cta_headline') ?>
<?= $site->content('cta_lead') ?>
<?= $site->content('cta_hero') ?>
<?= $site->content('cta_button') ?>
<?= $site->content('cta_email') ?>
<?= $site->content('footer_left') ?>
<?= $site->content('footer_right') ?>





<!-- SECTIONS Copy and paste before and after each section-->
<?php if( $site->section('header') ){ //begin HEADER section?><div id="header"></div><a id="header"></a>
<?php } //end header section?>
            
<?php if( $site->section('about_us') ){ //begin NOSOTROS section?><div id="nosotros"></div><a id="nosotros"></a>
<?php } //end nosotros section?>
			 
<?php if( $site->section('photos') ){ //begin FOTOS section?><div id="fotos"></div><a id="fotos"></a>
<?php } //end fotos section?>
			
<?php if( $site->section('news') ){ //begin NOVEDADES section?><div id="novedades"></div><a id="novedades"></a>
<?php } //end novedades section?>
		
<?php if( $site->section('contact') ){ //begin CONTACTO section?><div id="contacto"></div><a id="contacto"></a>
<?php } //end contacto section?>

<?php if( $site->section('footer') ){ //begin FOOTER section?><div id="footer"></div><a id="footer"></a>
<?php } //end footer section?>

<?php if( $site->section('footer_widgets') ){ //begin FOOTER WIDGETS section?>
<?php } //end footer widgets section?>

<?php if( $site->section('sidebar_widgets') ){ //begin SIDEBAR WIDGETS section?>
<?php } //end sidebar widgets section?>
            


            
	<!-- MODULE SECTIONS Copy and paste before and after each module-->
            
<?php if( $site->module('header_navigation') ){ //begin HEADER NAVIGATION module?>
<?php } //end header navigation module?>
            
<?php if( $site->module('business_name') ){ //begin business_name module?>
<?php } //end business_name module?>

<?php if( $site->module('slogan') ){ //begin slogan module ?>
<?php } //end slogan module?>
            
<?php if( $site->module('cover_photo') ){ //begin cover_photo module  ?>
<?php } //end cover_photo module?>
            
<?php if( $site->module('profile_photo') ){ //begin profile_photo module  ?>
<?php } //end profile_photo module?>
            
<?php if( $site->module('hours') ){ //begin hours module  ?>
<?php } //end hours module?>
            
<?php if( $site->module('contact_info') ){ //begin contact_info module  ?><div id="más info"></div>
<?php } //end contact_info module?>
            
<?php if( $site->module('address') ){ //begin address module  ?><div id="dirección"></div>
<?php } //end address module?>
            
<?php if( $site->module('map') ){ //begin map module  ?>
<?php } //end map module?>
            
<?php if( $site->module('more_info') ){ //begin more_info module  ?>
<?php } //end more_info module?>
            
<?php if( $site->module('call_to_action') ){ //begin call_to_action module  ?>
<?php } //end call_to_action module?>
            
<?php if( $site->module('services') ){ //begin services module  ?>
<?php } //end services module?>
            
<?php if( $site->module('fb_likebutton') ){ //begin fb_likebutton module  ?>
<?php } //end fb_likebutton module?>
            
<?php if( $site->module('fb_followbutton') ){ //begin fb_followbutton module  ?>
<?php } //end fb_followbutton module?>

<?php if( $site->module('fb_followbox') ){ //begin fb_followbox module  ?>
<?php } //end fb_followbox module?>
            
<?php if( $site->module('fb_sharebutton') ){ //begin fb_sharebutton module  ?>
<?php } //end fb_sharebutton module?>
            
<?php if( $site->module('fb_likebox') ){ //begin fb_likebox module  ?>
<?php } //end fb_likebox module?>
            
<?php if( $site->module('fb_timeline') ){ //begin fb_timeline module  ?>
<?php } //end fb_timeline module?>
            
<?php if( $site->module('fb_comments') ){ //begin fb_comments module  ?>
<?php } //end fb_comments module?>
            
<?php if( $site->module('pricing_tables') ){ //begin pricing_tables module  ?>
<?php } //end pricing_tables module?>
            
<?php if( $site->module('contact_form') ){ //begin contact_form module  ?>
<?php } //end contact_form module?>






