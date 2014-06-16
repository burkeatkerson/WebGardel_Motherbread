<?php

//------------------------------------------------------------------//
//************ Custom Facebook Feed Standalone Settings ************//
//------------------------------------------------------------------//

$settings = array(

    //*************************//
    //******CONFIGURATION******//
    //*************************//

    // Enter your license key below. Lost your license? Contact Smash Balloon at http://smashballoon.com/custom-facebook-feed/support
    'license'           => 'b8f834ddfb9028f0d6f4ce4dfe344340',

    // Optional: Enter your Facebook Access Token below. If you don't have an Access Token then you can get one by following these simple steps: http://smashballoon.com/custom-facebook-feed/access-token/
    'access_token'      => 'OPTIONAL_ACCESS_TOKEN_HERE',

    // Set the Page ID of the Facebook page you want to display below. Make sure to include the quote marks around it.
    // For information on how to find your Page ID go to http://smashballoon.com/custom-facebook-feed/id/
    'id'                => '272676249498497',

    // Is the Facebook feed from a page or a group?
    'pagetype'          => 'page',  // 'page' or 'group'


    //*************************//
    //*****CUSTOM SETTINGS*****//
    //*************************//

    /*
       Define any optional custom settings below.
       For a list of all settings please refer to: http://smashballoon.com/custom-facebook-feed/docs/standalone-settings/

       An example of how to change the layout and number of posts is below:
    */

    'layout' => 'half',
    'number' => '5',
	'limit' => '9',
	'showpostsby' => 'others',
	'eventsource' => 'timeline',
	'eventimage' => 'full',
	'datepos' => 'above',
	'likebox' => 'bottom',
	'likeboxfaces' => 'true',
	'seemoretext' => 'Leer más',
	'seelesstext' => 'Menos',
	'facebooklinktext' => 'Verlo en Facebook',
	'second' => 'segundo',
	'seconds' => 'segundos',
	'minute' => 'minuto',
	'minutes' => 'minutos',
	'hour' => 'hora',
	'hours' => 'horas',
	'day' => 'día',
	'days' => 'días',
	'year' => 'año',
	'years' => 'años',
	'ago' => 'en el pasado',
	'textbeforedate' => 'Subido',

	
	
    


    //***END CUSTOM SETTINGS***//


    // Don't remove the line below. It is required.
    'path'              => isset($fbfeed_path) ? $fbfeed_path : ''

);


// Include the file which generates the feed
if (isset($fbfeed_path)) include $fbfeed_path . '/core/custom-facebook-feed.php';

// Don't display error messages. To debug comment out the line below.
error_reporting(0);

// Uncommment the line below to show your system info settings
// cff_system_info();

?>