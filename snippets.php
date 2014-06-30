<!--  Snippets for converting a template into a WebGardel theme -->

<!-- Paste lines 4-28 at the very top of the index page through the title tag-->
<!-- WebGardel Theme : _____theme name__________ -->
<?php //webgardel framework files
    include_once('wg_TDK.php');
    include_once('sbwebsite.php');
    $site = new SBWebsite();
	$fbfeed_path = 'assets/plugins/fbfeed';
	include $fbfeed_path . '/fbfeed-settings.php'; 
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $site->data('company_name') ?></title>
    <? //Meta tags for Facebook, sharing, and SEO ?>
    <meta property="og:title" content="<?= $site->data('company_name') ?> <?= $site->data('slogan_text') ?>"/>
	<meta property="og:image" content="http://graph.facebook.com/<? echo $site->data('fb_id') ?>/picture?type=large"/>
	<meta property="og:site_name" content="<?= $site->data('domain_name') ?>"/>
	<meta property="og:url" content="http://<?= $site->data('domain_name') ?>"/>
	<meta property="og:description" content="<? echo $site->content('long_description') ?>"/>
    <meta name="description" content="<?= $site->data('short_description') ?>">






<!-- Facebook, Maps, Menus FUNCTIONALITY & strings - paste right after the body tag -->
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
<? echo $menu_item_li; //don't forget the ul or ol tags before and after ?>


<!-- Copy and paste specifically where you want the FACEBOOK WIDGET to show up -->
<? echo $fb_widget['prof_pic']; ?>
<? echo $fb_widget['prof_pic_small']; ?>
<? echo $fb_widget['prof_pic_custom']; ?>
<? echo $fb_widget['cover_photo']; ?>
<? echo $fb_widget['likebutton']; ?>
<? echo $fb_widget['followbox_standard']; ?>
<? echo $fb_widget['followbutton']; ?>
<? echo $fb_widget['sharebutton_box_small']; ?>
<? echo $fb_widget['sharebutton']; ?>
<? echo $fb_widget['sharebutton_horiz']; ?>
<? echo $fb_widget['comments']; ?>
<? echo $fb_widget['likebox']; ?>
<? echo $fb_widget['likebox_tall']; ?>

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
<?= $site->content('custom_footer') ?>





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






