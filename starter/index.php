<!-- WebGardel Theme : Name_goes_here -->

<?php
    include_once('sbwebsite.php');
    $site = new SBWebsite();
	
	require 'php-sdk/facebook.php';
	$facebook = new Facebook(array(
		'appId' => '1494239327474271',
		'secret' => 'a21ef8efb69c45d66c30e4c05cb8c343',
		));
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
    <title><?= $site->data('company_name') ?> ::: <?= $site->data('domain_name') ?></title>
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="global_assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="global_assets/ico/favicon.ico">


</head>
<?php $fbfeed_path = 'fbfeed';
include $fbfeed_path . '/fbfeed-settings.php'; ?>
<body class="wide">
<? //Webgardel theme functionality ?>
<div id="fb-root"></div>
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
<? $fb_likebutton = '<div class="fb-like" data-href='.$site->data('fb_page_url').'"  data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>'; 
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


			//Get the contents of a Facebook page
			$photo_contents = file_get_contents('http://graph.facebook.com/'.$site->data('fb_id').'/albums?fields=id,name,type,link,cover_photo');
			$albums = json_decode($photo_contents,true);
			$albums = $albums['data'];
			
	
 //end Webgardel theme functionality
?>
<!-- New theme content begins here -->




























<!-- New theme content ends here -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        theme.init();
        theme.initIsotope();
        theme.initTestimonials();
        theme.initPartnerSlider();
        theme.initLastTweet();
        theme.initParallax();
        theme.initAnimation();
        theme.initFlexSlider();
        if (!( jQuery('html').hasClass('ie8')))
            theme.initEasyPieChart();
    });
</script>
<!-- include assets for Facebook-Timeline -->
<link type="text/css" rel="stylesheet" href="global_assets/css/magnific-popup.css" />
<link type="text/css" rel="stylesheet" href="global_assets/css/dpSocialTimeline.css" />
<script type="text/javascript" src="global_assets/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="global_assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="global_assets/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="global_assets/js/jquery.dpSocialTimeline.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#socialTimeline').dpSocialTimeline({
			feeds: 
			{
				'facebook_page': {data: '5550296508', limit: 20},
			},
			timelineItemWidth: '45%',
			columnsItemWidth: '350px',
			oneColumnItemWidth: '80%',
			skin: 'light',
			share: true,
			addLightbox: true,
			total: 20
		});
		
	});
</script>
</body>
</html>
