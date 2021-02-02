<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Custome Routes
$route['sign-in'] = 'login';
$route['sign-out'] = 'login/logout';

// Common Class Routes
$route['sidebar/(:any)'] = 'Commanclass/active_sidebar/$1';

//Change Password
$route['change-password'] ='Change_password/index';

// Session Activities
$route['change-role/(:any)'] = 'login/change_role/$1';

$route['dashboard'] = 'dashboard';

$route['user_roles'] = 'User_role/index';
$route['craeteuser'] = 'User/add';

/*
 * masters routes
 */
$route['ledger-create'] = 'ledger/add';

/*
 * Role Manager
 */
$route['menus'] = 'menu/index';
$route['menu-add'] = 'menu/add';
$route['menu-edit/(:any)'] = 'menu/edit/$1';
$route['menu-delete/(:any)'] = 'menu/remove/$1';
//Role List
$route['roles-list'] = 'roles/roles_list';

//Role Has menu
$route['roles-has-menu/(:any)'] = 'Role_has_menu/add/$1';
$route['roles-delete/(:any)'] = 'Roles/role_delete/$1';
$route['role-menu-delete/(:any)/(:any)'] = 'role_manager/role_menu_delete/$1/$2';

//Login List and Operations in Role_manager Contrroler
$route['all-users'] = 'role_manager/all_users';
$route['manage-user-roles/(:any)'] = 'role_manager/manage_user_roles/$1';
$route['login-has-role-delete/(:any)/(:any)'] = 'role_manager/login_has_role_delete/$1/$2';


//System Users
$route['system-users'] = 'user/index';
$route['system-user-add'] = 'user/add';
$route['system-user-edit/(:any)'] = 'user/edit/$1';

//Theme
$route['theme-setting'] = 'theme/index';

//system db
$route['system-backup'] = 'System_backup/backup';


//Development Routes
$route['registration'] = 'Registration/index';
$route['otp/(:any)/(:any)'] = 'Email/otp/$1/$2';
$route['verify-email/(:any)/(:any)'] = 'Email/verify_email/$1/$2';
$route['forgot-password'] = 'Email/forgot_pass';
$route['reset-password/(:any)/(:any)'] = 'Email/reset_password/$1/$2';

$route['resend-verification'] = 'Email/resend_verification';

$route['edit-details'] = 'Users/edit';


//New Dev
$route['user-emotion'] = 'User_datum/user_side';
$route['users'] = 'Users/index';
$route['view/(:any)'] = 'User_datum/view/$1';
