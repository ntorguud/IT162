<?php
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

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Sara's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'contactme.php':
        $title = "Naran Torguud's IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Contact Naran';
    break;

    case 'aia.php':
        $title = "Naran Torguud's Final Project AIA (Client work)";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        $PageID = 'AIA by Naran';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default  
        $PageID = 'Welcome';
   }
?>

