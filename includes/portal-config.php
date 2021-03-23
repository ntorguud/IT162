<?php

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Portal Page";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Naran";

$logo_color = ''; //make logo_color an empty string by default

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Naran's IT162 Title Page";
        $logo = 'fa-home';
        $PageID = 'Portal Page';
    break;
    
    case 'contactme.php':
        $title = "Naran's Contact Page";
        $logo = 'fa-phone';
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Contact Naran';
    break;

    case 'aia.php':
        $title = "Naran's Final Project AIA (Client work)";
        $logo = "fa-table";
        $logo_color = ' style="color:#00f"';
        $PageID = 'AIA';
    break;

    case 'flowchart.php':
        $title = "Naran's Flowchart Page'";
        $logo = "fa-pencil-square-o";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Flowchart';
    break;

    case 'big/index.php':
        $title = "Naran's Big Page'";
        $logo = "fa-bank";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Big Page';
    break;

    case 'fp/index.php':
        $title = "Naran's Final Project Portal Page";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        $PageID = 'Final Project Portal Page';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default  
        $PageID = '';
   }
   
   /*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a href="' . $url . '" class="selected>' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}
?>

