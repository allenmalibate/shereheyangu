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
$route['default_controller'] = 'home';

//routes for home
$route['faq'] = 'home/faq';
$route['members'] = 'home/members';
$route['about-us'] = 'home/aboutUs';
$route['get-started'] = 'home/getStarted';
$route['get-started/:num'] = 'home/getStartedOnSpecific';

//routes for registered user of the system
$route['login'] = 'user/logIn';
$route['log-out'] = 'user/logOut';
$route['update-user-password'] = 'user/updateUserPassword';
$route['create-account'] = 'user/createAccount';
$route['contacts-work'] = 'user/contactsWork';
$route['user-home'] = 'user/userHome';
$route['user-profile'] = 'user/userProfile';
$route['upload-my-profile-picture/:num'] = 'user/uploadMyProfilePicture';
$route['user-mobile-contacts'] = 'user/userMobileContacts';
$route['add-mobile-contact'] = 'user/addMobileContact';
$route['edit-mobile-contact/:num'] = 'user/editMobileContact';
$route['delete-mobile-contact/:num'] = 'user/deleteMobileContact';
$route['view-user-profile/:num'] = 'user/viewUserProfile';

//control for user business on my account
$route['add-my-business'] = 'userBusiness/addMyBusiness';
$route['edit-my-business/:num'] = 'userBusiness/editMyBusiness';
$route['view-my-business/:num'] = 'userBusiness/viewMyBusiness';
$route['upload-my-business-photo/:num'] = 'userBusiness/uploadMyBusinessPhoto';
$route['upload-my-business-logo/:num'] = 'userBusiness/uploadMyBusinessLogo';
$route['delete-my-business/:num'] = 'userBusiness/deleteMyBusiness';
$route['view-user-business/:num'] = 'userBusiness/viewUserBusiness';


//routes for administrations
$route['admin-home'] = "admin/adminHome";
$route['manage-work-options'] = 'admin/manageWorkOption';
$route['add-work-option'] = 'admin/addWorkOption';
$route['edit-work-option/:num'] = 'admin/editWorkOption';
$route['manage-user'] = 'admin/manageUser';
$route['manage-setting'] = 'admin/manageSetting';
$route['create-admin'] = 'admin/createAdmin';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
