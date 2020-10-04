<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] ='home/about';
$route['services'] ='home/services';
$route['contact-us'] ='home/contact';
$route['careers'] ='home/careers';

$route['terms-and-conditions'] ='home/terms';
$route['privacy-and-policy'] ='home/privacy';

$route['portfolio'] ='work';
$route['case-study'] ='case_study';

$route['blog'] ='home/blog';
$route['blog/(:any)'] ='blog/index/$1';
//$route['blog/instagram-for-businesses'] ='blog/blog1';


$route['portfolio/road-to-safety/social-media-work'] ='work/road_safety';
$route['portfolio/castrol/social-media-work'] ='work/castrol';
$route['portfolio/nodwin/social-media-work'] ='work/nodwin';
$route['portfolio/real-estate-awards/social-media-work'] ='work/rea';
$route['portfolio/button-dabao-desh-banao/social-media-work'] ='work/bddb';
$route['portfolio/mahindra-first-choice-services/social-media-work'] ='work/mfcs';
$route['portfolio/sportz-consult/social-media-work'] ='work/sportz_consult';
$route['portfolio/team-cashless-india/social-media-work'] ='work/team_cashless_india';
$route['portfolio/smarter-india/social-media-work'] ='work/smarter_india';
$route['portfolio/smart-cities-of-india/social-media-work'] ='work/smart_cities_of_india';
$route['portfolio/hollywood-opticians/social-media-work'] ='work/hollywood_opticians';
$route['portfolio/foresight-opticals/social-media-work'] ='work/foresight_opticals';
$route['portfolio/lime/social-media-work'] ='work/lime';
$route['portfolio/grill-box/social-media-work'] ='work/grill_box';
$route['portfolio/inifd-vashi/social-media-work'] ='work/inifd_vashi';
$route['portfolio/ayushakti/social-media-work'] ='work/ayushakti';
$route['portfolio/kolkata-rolls/social-media-work'] ='work/kolkata_rolls';
$route['portfolio/ai-awards/social-media-work'] ='work/ai_awards';
$route['portfolio/mission-insure-india/social-media-work'] ='work/mission_insure_india';
$route['portfolio/the-professional-couriers/social-media-work'] ='work/the_professional_couriers';
$route['portfolio/cosplay-genie/social-media-work'] ='work/cosplay_genie';

$route['portfolio/frozen-music/social-media-work'] ='work/frozen_music';
$route['portfolio/tree-house-high-school/social-media-work'] ='work/tree_house_high_school';
$route['portfolio/alcazar/social-media-work'] ='work/alcazar';
$route['portfolio/the-united-emperors/social-media-work'] ='work/the_united_emperors';
$route['portfolio/suggeston/social-media-work'] ='work/suggeston';
$route['portfolio/sociomark/social-media-work'] ='work/sociomark';

