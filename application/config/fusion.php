<?php

/**
 * @package FusionGen
 * @version 6.0
 * @author Jesper Lindström
 * @author Xavier Geerinck
 * @author Err0r
 * @link http://fusiongen.net
 */

/*
|--------------------------------------------------------------------------
| ACP security code
|--------------------------------------------------------------------------
|
| An additional password to add another layer of security
|
*/
$config['security_code'] = "U74RvGYRBjhw4lK";

/*
|--------------------------------------------------------------------------
| Theme name
|--------------------------------------------------------------------------
|
| Must be located in application/views/NAME and must contain a valid theme manifest
|
*/
$config['theme'] = "default";

/*
|--------------------------------------------------------------------------
| Website title
|--------------------------------------------------------------------------
*/
$config['title'] = "SakhWoW";

/*
|--------------------------------------------------------------------------
| Server name
|--------------------------------------------------------------------------
*/
$config['server_name'] = "SakhWoW HaRD HD";

/*
|--------------------------------------------------------------------------
| Realmlist
|--------------------------------------------------------------------------
*/
$config['realmlist'] = "logon.sakhwow.com";

/*
|--------------------------------------------------------------------------
| Use rewrite engine
|--------------------------------------------------------------------------
|
| Whether to hide index.php from the URL or not
| Requires Apache module "rewrite_module", to enable it remove the # in
| front of "LoadModule rewrite_module modules/mod_rewrite.so" in the Apache
| config file "httpd.conf"
|
*/
$config['rewrite'] = true;

/*
|--------------------------------------------------------------------------
| SMTP server
|--------------------------------------------------------------------------
|
| If you don't have a SMTP server put it to false. The password recovery
| will be disabled if you disable this.
|
*/
$config['has_smtp'] = 1;

/*
|--------------------------------------------------------------------------
| Max expansions
|--------------------------------------------------------------------------
|
| Set the maximum expansion for accounts
|
| 0 = Vanilla/Classic
| 1 = The Burning Crusade/TBC
| 2 = Wrath of The Lich King/Wotlk
| 3 = Cataclysm
| 4 = Mists of Pandaria/MoP
| 5 = Warlods of Draenor/WoD
| 6 = Legion
| 7 = Battle for Azeroth/BFA
| 8 = Shadowlands/SL
| 9 = Dragonflight/DF
|
*/
$config['max_expansion'] = 2;

/*
|--------------------------------------------------------------------------
| Image slider module
|
| ['slider'] Enable or disable slider
| ['slider_home'] Hide slider from any page except of 'Home'
| ['slider_intveral'] How long the delay should be between the images (in milliseconds, default is 3000 (3 seconds))
| ['slider_style'] Animation style (leave blank for "random"):
|
|	2D:
|		bars
|		blinds
|		blocks
|		blocks2
|		concentric
|		dissolve requires mask support
|		slide
|		warp
|		zip
|	3D:
|		bars3d
|		blinds3d
|		cube
|		tiles3d
|		turn
|
|--------------------------------------------------------------------------
*/
$config['slider'] = false;
$config['slider_home'] = false;
$config['slider_interval'] = 5000;
$config['slider_style'] = 8;

/*
|--------------------------------------------------------------------------
| Enable vote reminder popup
|--------------------------------------------------------------------------
|
| ['vote_reminder'] Whether or not to display a popup message that reminds the users to vote
| every (by default) 12 hours.
|
| ['reminder_interval'] How often the reminder should be displayed, in seconds
| Default is 60 * 60 * 12, which represents 12 hours
|
*/
$config['vote_reminder'] = 0;
$config['vote_reminder_image'] = "/images/misc/banner.jpg";
$config['reminder_interval'] = 270000;

/*
|--------------------------------------------------------------------------
| Search engine related
|--------------------------------------------------------------------------
|
| ['keywords'] Content keywords, separated by comma
| ['description'] Brief description of your site
|
*/
$config['keywords'] = false;
$config['description'] = false;

/*
|--------------------------------------------------------------------------
| Use FusionCMS tooltip system instead of WoWHead tooltips
|--------------------------------------------------------------------------
|
| Put to false if you mainly have "blizzlike" items.
|
*/
$config['use_fcms_tooltip'] = true;

/*
|--------------------------------------------------------------------------
| Enable Google Analytics
|--------------------------------------------------------------------------
|
| In case you want to track your visitor statistics more deeply,
| Google Analytics can be enabled by entering your Tracking ID here
| (found on the "Admin" page)
|
| Set it to false if you don't use it
|
| Example: UA-XXXXXXXX-1, format may differ
|
*/
$config['analytics'] = "G-0NVG2XLCPF";

/*
|--------------------------------------------------------------------------
| Cache system
|--------------------------------------------------------------------------
|
| Wether or not the cache should be enabled. Disable only for development.
| Turning it on will improve performance drastically.
| (Disabled, we do cache by .htaccess instead and are not dependant on the in-built CI Cache System. This allows use
| to furtherly use filter options in specific places and modules we dont want cached. For example: Realm Status)
*/
$config['cache'] = true;

/*
|--------------------------------------------------------------------------
| Update system
|--------------------------------------------------------------------------
|
| Auto Update? DESCRION
*/
$config['auto_update'] = true;

/*
|--------------------------------------------------------------------------
| Support tool
|--------------------------------------------------------------------------
*/
$config['api_key'] = "";
