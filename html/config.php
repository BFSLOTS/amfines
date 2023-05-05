<?php

/*--------------------*/
// Description: MoFlix - Ultimate PHP Script For Movie & TV Shows
// Author: Wicombit
// Author URI: https://codecanyon.net/user/wicombit/portfolio
/*--------------------*/

//URL PROJECT
 
define ('_SITE_URL', 'YOUR_SITE_URL_HERE');

//DATABASE CONFIGURATION 

$database = array(

'host' => "DB_HOST_HERE",
'db' => "DB_NAME_HERE",
'user' => "DB_USER_HERE",
'pass' => "DB_PASSWORD_HERE"

);

// SITE CONFIGURATION 

$site_config = array(
	
    'items_page' => 20, // Number Of Items To Display Per Page (Minimum 5)
    'items_featured' => 12, // Number Of Featured Items To Display (Minimum 4)
    'items_recent' => 10, // Number Of Recent Items To Display (Minimum 5)
);

?>