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

$route['portfolio'] ='work';
$route['case-study'] ='case_study';
$route['careers'] ='careers';

$route['blog'] ='home/blogs';
$route['blog/(:any)'] ='blog/index/$1';
//$route['blog/instagram-for-businesses'] ='blog/blog1';

$route['portfolio/india-forbes/social-media-work/'] ='work/india_forbes';
$route['portfolio/icici/social-media-work/'] ='work/icici';
$route['portfolio/castrol/social-media-work/'] ='work/castrol';
$route['portfolio/lime/social-media-work/'] ='work/lime';
$route['portfolio/nodwin/social-media-work/'] ='work/nodwin';
$route['portfolio/cnbc-diageo/social-media-work'] ='work/cnbc_diageo';
$route['portfolio/the-professional-couriers/social-media-work/'] ='work/the_professional_couriers';
$route['portfolio/ayushakti/social-media-work/'] ='work/ayushakti';
$route['portfolio/mahindra-first-choice-services/social-media-work/'] ='work/mahindra_first_choice_services';
$route['portfolio/frozen-music/social-media-work/'] ='work/frozen_music';
$route['portfolio/hollywood-opticians/social-media-work/'] ='work/hollywood_opticians';
$route['portfolio/foresight-opticals/social-media-work/'] ='work/foresight_opticals';
$route['portfolio/mastercard/social-media-work/'] ='work/mastercard';
$route['portfolio/lenovo/social-media-work/'] ='work/lenovo';
$route['portfolio/button-dabao-desh-banao/social-media-work/'] ='work/button_dabao_desh_banao';
$route['portfolio/tree-house-high-school/social-media-work/'] ='work/tree_house_high_school';
$route['portfolio/grill-box/social-media-work/'] ='work/grill_box';
$route['portfolio/sportz-consult/social-media-work/'] ='work/sportz_consult';
$route['portfolio/inifd-vashi/social-media-work/'] ='work/inifd_vashi';
$route['portfolio/alcazar/social-media-work/'] ='work/alcazar';
$route['portfolio/the-united-emperors/social-media-work/'] ='work/the_united_emperors';
$route['portfolio/suggeston/social-media-work/'] ='work/suggeston';
$route['portfolio/sociomark/social-media-work/'] ='work/sociomark';

