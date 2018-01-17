 Ogwen Valley Mountain Rescue Organisation Mobile Website
 Group 7: Pub Quiz
 
 CONTENTS OF THIS FILE
---------------------
 * Team Members
 * Directory of Files
 * Introduction
 * Installation
 * User Guide


TEAM MEMBERS
------------
Torin Cowen
Robert Simpkin
Chris Bennett
Jamie Bond
 
DIRECTORY OF FILES
------------------
README.TXT
OVMRO Website
-Source Code
  -.htaccess
  -333 mercahndise Compass Small.jpg
  -333 mercahndise mug Small.jpg
  -333 mercahndise Whistle Small.jpg
  -Bochlwyd050414.jpg
  -buff_tn.jpg
  -calloutsAPI.php
  -childrenst.jpg
  -compass-small.jpg
  -crab.jpg
  -DB.php
  -dbAPI.php
  -dsc0007c.jpg
  -greetingscards.jpg
  -home.html
  -IMAG0293.jpg
  -IMG1718.jpg
  -IMG_20140120_143713.jpg
  -OVMRO-333 Logo 7.jpg
  -pinbadges.jpg
  -README.txt
  -report.jpg
  -Rescue bear.jpg
  -Slabs0700414.jpg
  -stylesheet.css
  -tshirts.jpg
  -whistle.jpg
  -xmascards.jpg
  -images\
    -bryn_poeth_vehicles.jpg
    -cneifion_arete.jpg
    -oggie8start.jpg
    -rescue.jpg
    -teammembers.jpg
    -winners13.jpg
  -themes\
    -jquery.mobile.icons.min.css
    -mountainrescue.css
    -mountainrescue.min.css
    -images\
      -ajax-loader.gif
      -icons-png\
        -action-white.png
        -alert-black.png
        -alert-white.png
        -arrow-d-black.png
        -arrow-d-l-black.png
        -arrow-d-l-white.png
        -arrow-d-r-black.png
        -arrow-d-r-white.png
        -arrow-d-white.png
        -arrow-l-black.png
        -arrow-l-white.png
        -arrow-r-black.png
        -arrow-r-white.png
        -arrow-u-black.png
        -arrow-u-l-black.png
        -arrow-u-l-white.png
        -arrow-u-r-black.png
        -arrow-u-r-white.png
        -arrow-u-white.png
        -audio-black.png
        -audio-white.png
        -back-black.png
        -back-white.png
        -bars-black.png
        -bars-white.png
        -bullets-black.png
        -bullets-white.png
        -calendar-black.png
        -calendar-white.png
        -camera-black.png
        -camera-white.png
        -carat-d-black.png
        -carat-d-white.png
        -carat-l-black.png
        -carat-l-white.png
        -carat-r-black.png
        -carat-r-white.png
        -carat-u-black.png
        -carat-u-white.png
        -check-black.png
        -check-white.png
        -clock-black.png
        -clock-white.png
        -cloud-black.png
        -cloud-white.png
        -comment-black.png
        -comment-white.png
        -delete-black.png
        -delete-white.png
        -edit-black.png
        -edit-white.png
        -eye-black.png
        -eye-white.png
        -forbidden-black.png
        -forbidden-white.png
        -forward-black.png
        -forward-white.png
        -gear-black.png
        -gear-white.png
        -grid-black.png
        -grid-white.png
        -heart-black.png
        -heart-white.png
        -home-black.png
        -home-white.png
        -info-black.png
        -info-white.png
        -location-black.png
        -location-white.png
        -lock-black.png
        -lock-white.png
        -mail-black.png
        -mail-white.png
        -minus-black.png
        -minus-white.png
        -navigation-black.png
        -navigation-white.png
        -phone-black.png
        -phone-white.png
        -plus-black.png
        -plus-white.png
        -power-black.png
        -power-white.png
        -recycle-black.png
        -recycle-white.png
        -refresh-black.png
        -refresh-white.png
        -search-black.png
        -search-white.png
        -shop-black.png
        -shop-white.png
        -star-black.png
        -star-white.png
        -tag-black.png
        -tag-white.png
        -user-black.png
        -user-white.png
        -video-black.png
        -video-white.png


INTRODUCTION
------------

Ogwen Valley Mountain Rescue Mobile Website, to be used on all mobile devices.


INSTALLATION
------------

1. Add the following to the htaccess file:

RewriteEngine on
RewriteBase /
# Check if this is the noredirect query string
RewriteCond %{QUERY_STRING} (^|&)m=0(&|$)
# Set a cookie, and skip the next rule
RewriteRule ^ - [CO=mredir:0: http://www.ogwen-rescue.org.uk/]

# Check if this looks like a mobile device
# (You could add another [OR] to the second one and add in what you
#  had to check, but I believe most mobile devices should send at
#  least one of these headers)
RewriteCond %{HTTP:x-wap-profile} !^$ [OR]
RewriteCond %{HTTP:Profile}       !^$ [OR]
RewriteCond %{HTTP_USER_AGENT} "acs|alav|alca|amoi|audi|aste|avan|benq|bird|blac|blaz|brew|cell|cldc|cmd-" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "dang|doco|eric|hipt|inno|ipaq|java|jigs|kddi|keji|leno|lg-c|lg-d|lg-g|lge-" [NC,OR]
RewriteCond %{HTTP_USER_AGENT}  "maui|maxo|midp|mits|mmef|mobi|mot-|moto|mwbp|nec-|newt|noki|opwv" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "palm|pana|pant|pdxg|phil|play|pluc|port|prox|qtek|qwap|sage|sams|sany" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "sch-|sec-|send|seri|sgh-|shar|sie-|siem|smal|smar|sony|sph-|symb|t-mo" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "teli|tim-|tosh|tsm-|upg1|upsi|vk-v|voda|w3cs|wap-|wapa|wapi" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "wapp|wapr|webc|winw|winw|xda|xda-" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "up.browser|up.link|windowssce|iemobile|mini|mmp" [NC,OR]
RewriteCond %{HTTP_USER_AGENT} "symbian|midp|wap|phone|pocket|mobile|pda|psp" [NC]
RewriteCond %{HTTP_USER_AGENT} !macintosh [NC]

# Check if we're not already on the mobile site
RewriteCond %{HTTP_HOST}          !^m\.
# Can not read and write cookie in same request, must duplicate condition
RewriteCond %{QUERY_STRING} !(^|&)m=0(&|$) 

# Check to make sure we haven't set the cookie before
RewriteCond %{HTTP_COOKIE}        !^.*mredir=0.*$ [NC]

# Now redirect to the mobile site
RewriteRule ^ http://m.ogwen-rescue.org.uk/ [R,L]


2. Change DB connection parameters. 
To make the database function correctly, the DB.php file needs to be edited to fit
the new server’s credentials. At the moment, it is as followed:

<?php 
	$host = "localhost";
	$user = "u265489428_chris";
	$pass = "OgwenValley";
	$databaseName = "u265489428_ogwen";
?>

The parameters need to be changed as followed:
•	$host – wherever the database is hosted.
•	$user – the username used to access the database.
•	$pass – the password used to access the database.
•	$databaseName  - the name of the database itself.


USING THE WEBSITE
------------------

Navigating Pages
Navigating up and down the pages on mobile devices is simply done by swiping in the 
direction you wish to move.
 
Navigating the site
Navigating between pages is done by using the navigation menu, which can be accessed
via the ‘Navigate’ button located at the top left hand corner of each page.
Once the ‘Navigate’ button has been clicked, it will load the navigation 
popup, to navigate to a specific page, click the page name on the navigation popup,
and it will take you there.

Returning to the ‘Home’ page
Navigating back to the ‘Home’ page when on any of the other pages is done by clicking 
the ‘Home’ button in the top right hand corner of each page.
 
Navigating Expandable List Items
All of the expandable list items on the website can be expanded by simply 
clicking anywhere on the list item.

