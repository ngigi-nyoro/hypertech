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
$route['404_override'] = 'error';
$route['translate_uri_dashes'] = FALSE;

//FRONT END
$route['about/company-profile'] = 'home/company_profile';
$route['about/our-team'] = 'home/our_team';

$route['services/software/custom-development'] = 'home/custom_development';
$route['services/software/mobile-development'] = 'home/mobile_development';

$route['services/creative-design/corporate-branding'] = 'home/corporate_branding';
$route['services/creative-design/gift-items'] = 'home/gift_items';

$route['services/consultancy/business-process-automation'] = 'home/business_process_automation';

$route['products/hypertech-ischoolpro'] = 'home/hypertech_ischoolpro';
$route['products/hypertech-frontdesk'] = 'home/hypertech_frontdesk';
$route['products/hypertech-smartpos'] = 'home/hypertech_smartpos';

$route['portfolio'] = 'home/portfolio';

$route['careers'] = 'home/careers';
$route['careers/social-media-intern'] = 'home/social_media_intern';
$route['careers/sales-and-marketing-agent'] = 'home/sales_and_marketing_agent';

$route['contact'] = 'home/contact';

