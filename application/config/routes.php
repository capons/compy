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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'main';
$route['404_override'] = 'Error_404';
$route['translate_uri_dashes'] = FALSE;
$route['case-studies'] = 'case_studies';
$route['case-studies/android-ios'] = 'case_studies/android_ios';
$route['careers/xamarin-developer'] = 'careers/xamarin_developer';
$route['careers/php-team-lead'] = 'careers/php_teamlead';
$route['careers/java-developer'] = 'careers/java_developer';
$route['careers/aspnet-developer'] = 'careers/aspnet_developer';
$route['careers/ios-developer'] = 'careers/ios_developer';
$route['careers/qa-engineer'] = 'careers/qa_engineer';
$route['careers/cpp-developer'] = 'careers/cpp_developer';
$route['careers/angularjs-developer'] = 'careers/angularjs_developer';
$route['careers/nodejs-developer'] = 'careers/nodejs_developer';
$route['careers/objective-c-swift-developer'] = 'careers/objective_c_swift_developer';
$route['careers/java-team-lead'] = 'careers/java_team_lead';
$route['case-studies/ui-design'] = 'case_studies/uidesign';
$route['case-studies/ui-design/(:any)'] = 'case_studies/uidesign/$1';
$route['case-studies/android-ios/(:any)'] = 'case_studies/android_ios/$1';
$route['case-studies/(:any)'] = 'case_studies/$1';
$route['case-studies/(:any)/(:any)'] = 'case_studies/$1/$2';


