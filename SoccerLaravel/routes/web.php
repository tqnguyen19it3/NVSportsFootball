<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	/* ==========================*************************************==========================
	 										START ADMIN BACK-END
	 ============================*************************************========================== */

//===START ADMIN LOGIN AND REGISTER===//
Route::get('/login-admin', 'App\Http\Controllers\AdminController@login_admin');
Route::get('/register-admin', 'App\Http\Controllers\AdminController@register_admin');
Route::post('/admin-login', 'App\Http\Controllers\AdminController@admin_login');
Route::post('/admin-register', 'App\Http\Controllers\AdminController@admin_register');
Route::get('/admin-dashboard', 'App\Http\Controllers\AdminController@admin_dashboard');
Route::get('/admin-logout', 'App\Http\Controllers\AdminController@admin_logout');
//=== END ADMIN LOGIN AND REGISTER===//



//===START ĐIỀU HƯỚNG ADMIN DASHBOARD===//
//Danh mục
Route::get('/admin-contacts', 'App\Http\Controllers\AdminDashboardController@admin_contacts');
Route::get('/manager-booked-yard/{id}', 'App\Http\Controllers\AdminDashboardController@manager_booked_yard');


//Hồ sơ cá nhân
Route::get('/admin-profile/{admin_id}', 'App\Http\Controllers\AdminDashboardController@admin_profile');

//Thay đổi tài khoản admin
Route::get('/admin-account/{admin_id}', 'App\Http\Controllers\AdminDashboardController@admin_account');
Route::post('/update-admin-account/{admin_id}', 'App\Http\Controllers\AdminDashboardController@update_admin_account');

//Thêm và Thay đổi tài khoản giao dịch admin
Route::get('/add-admin-pay', 'App\Http\Controllers\AdminDashboardController@add_admin_pay');
Route::post('/insert-admin-pay/{admin_id}', 'App\Http\Controllers\AdminDashboardController@insert_admin_pay');
Route::get('/edit-admin-pay/{ad_pay_id}', 'App\Http\Controllers\AdminDashboardController@edit_admin_pay');
Route::post('/update-admin-pay/{admin_id}/{ad_pay_id}', 'App\Http\Controllers\AdminDashboardController@update_admin_pay');



//=== START YARD SYSTEM ===//
//YARD SYSTEM
Route::get('/add-system-yard', 'App\Http\Controllers\YardSystemController@add_system_yard');
Route::post('/save-system-yard/{admin_id}', 'App\Http\Controllers\YardSystemController@save_system_yard');
Route::get('/view-system-yard', 'App\Http\Controllers\YardSystemController@view_system_yard');
Route::get('/edit-system-yard/{yard_system_id}', 'App\Http\Controllers\YardSystemController@edit_system_yard');
Route::post('/update-system-yard/{yard_system_id}', 'App\Http\Controllers\YardSystemController@update_system_yard');
Route::get('/delete-system-yard/{yard_system_id}', 'App\Http\Controllers\YardSystemController@delete_system_yard');

//POST YARDS SYSTEM
Route::get('/add-post-yardsys', 'App\Http\Controllers\YardSystemController@add_post_yardsys');
Route::post('/save-post-yardsys', 'App\Http\Controllers\YardSystemController@save_post_yardsys');
Route::get('/all-post-yardsys', 'App\Http\Controllers\YardSystemController@all_post_yardsys');
Route::get('/edit-post-yardsys/{yard_system_id}/{post_yardsys_id}', 'App\Http\Controllers\YardSystemController@edit_post_yardsys');
Route::post('/update-post-yardsys/{post_yardsys_id}', 'App\Http\Controllers\YardSystemController@update_post_yardsys');
Route::get('/delete-post-yardsys/{post_yardsys_id}', 'App\Http\Controllers\YardSystemController@delete_post_yardsys');
//=== END YARD SYSTEM ===//



//=== START YARD ===//
//YARDS
Route::get('/add-yard', 'App\Http\Controllers\YardSystemController@add_yard');
Route::post('/save-yard', 'App\Http\Controllers\YardSystemController@save_yard');
Route::get('/all-yard', 'App\Http\Controllers\YardSystemController@all_yard');
Route::get('/edit-yard/{yard_id}', 'App\Http\Controllers\YardSystemController@edit_yard');
Route::post('/update-yard/{yard_id}', 'App\Http\Controllers\YardSystemController@update_yard');
Route::get('/unactive-yard/{yard_id}', 'App\Http\Controllers\YardSystemController@unactive_yard');
Route::get('/active-yard/{yard_id}', 'App\Http\Controllers\YardSystemController@active_yard');
Route::get('/delete-yard/{yard_id}', 'App\Http\Controllers\YardSystemController@delete_yard');

//TIME AND PRICE YARD
Route::get('/add-time-and-price/{yard_system_id}/{yard_id}', 'App\Http\Controllers\YardSystemController@add_time_and_price_yard');
Route::post('/save-time-and-price/{yard_system_id}/{yard_id}', 'App\Http\Controllers\YardSystemController@save_time_and_price_yard');
Route::get('/unactive-time-and-price/{time_price_id}', 'App\Http\Controllers\YardSystemController@unactive_time_and_price_yard');
Route::get('/active-time-and-price/{time_price_id}', 'App\Http\Controllers\YardSystemController@active_time_and_price_yard');
Route::get('/delete-time-and-price/{time_price_id}', 'App\Http\Controllers\YardSystemController@delete_time_and_price_yard');
//=== END YARD ===//



//=== FILE BROWSER CKEDITOR=== //
Route::post('/upload-ckeditor', 'App\Http\Controllers\YardSystemController@ckeditor_image');
Route::get('/file-browser', 'App\Http\Controllers\YardSystemController@file_browser');
//=== END FILE BROWSER CKEDITOR  ===//



//===END ĐIỀU HƯỚNG ADMIN DASHBOARD===//

/* ==========================*************************************==========================
	 										END ADMIN BACK-END
	 ============================*************************************========================== */






/* ==========================*************************************==========================
	 										START USER BACK-END
	 ============================*************************************========================== */

//===REGISTER AND LOGIN USER===//
Route::post('/add-user', 'App\Http\Controllers\CustomerController@add_user');
Route::post('/login-user', 'App\Http\Controllers\CustomerController@login_user');
Route::get('/logout-user', 'App\Http\Controllers\CustomerController@logout_user');

//Login facebook
Route::get('/login-facebook','App\Http\Controllers\CustomerController@login_facebook');
Route::get('/login/callback','App\Http\Controllers\CustomerController@callback_facebook');

//Login google
Route::get('/login-google','App\Http\Controllers\CustomerController@login_google');
Route::get('/google/callback','App\Http\Controllers\CustomerController@callback_google');
//===END REGISTER AND LOGIN USER===//



//===START HOME===//
Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home-for-the-yard', 'App\Http\Controllers\HomeController@home_for_the_yard');
Route::get('/registration', 'App\Http\Controllers\HomeController@registration');
Route::get('/login', 'App\Http\Controllers\HomeController@login');
Route::get('/403', 'App\Http\Controllers\HomeController@Error403');
Route::get('/404', 'App\Http\Controllers\HomeController@Error404');
Route::get('/500', 'App\Http\Controllers\HomeController@Error500');
Route::get('/thank', 'App\Http\Controllers\HomeController@thankyou');
//Đặt sân
Route::get('/tim-san', 'App\Http\Controllers\HomeController@timsan');
Route::get('/tim-san-quan{quan_id}', 'App\Http\Controllers\HomeController@timsantheoquan');
Route::get('/ifr-recommend-yard', 'App\Http\Controllers\HomeController@ifr_recommend_yard');
Route::get('/chon-gio-da/{yard_system_slug}/{yard_slug}/{yard_system_id}/{yard_id}', 'App\Http\Controllers\HomeController@chon_gio_da');
Route::get('/xac-nhan-lich-da/{yard_system_slug}/{yard_slug}/{yard_system_id}/{yard_id}/{time_price_id}', 'App\Http\Controllers\HomeController@xac_nhan_lich_da');
Route::get('/ifr-calendar/{yard_system_id}/{yard_id}/{time_price_id}/{user_id}', 'App\Http\Controllers\HomeController@ifr_calendar');
Route::post('/save-schedule', 'App\Http\Controllers\HomeController@save_schedule');
Route::get('/gioi-thieu/{yard_system_slug}/{yard_system_id}/{post_yardsys_id}', 'App\Http\Controllers\HomeController@gioi_thieu_hts');
//=== END HOME ===//



//===SEND MAIL===//
Route::get('/send-mail', 'App\Http\Controllers\HomeController@send_mail');
// Route::post('/send-mail1', 'App\Http\Controllers\HomeController@send_mail1');
//===END SEND MAIL===//



//=== START PROFILE USER===//
// Route::get('/profile{user_id}', 'App\Http\Controllers\ProfileController@home_profile');
Route::get('/profile-person/{user_id}', 'App\Http\Controllers\ProfileController@home_profile_person');
Route::get('/profile-team/{profile_team_id}/{user_id}', 'App\Http\Controllers\ProfileController@home_profile_team');
Route::post('/update-profile-person/{user_id}', 'App\Http\Controllers\ProfileController@update_profile_person');
Route::post('/update-profile-team/{profile_team_id}/{user_id}', 'App\Http\Controllers\ProfileController@update_profile_team');
Route::get('/create-and-join-team', 'App\Http\Controllers\ProfileController@create_and_join_team');
Route::post('/insert-profile-team/{user_id}', 'App\Http\Controllers\ProfileController@insert_profile_team');
Route::get('/join-team/{user_id}/{profile_team_id}', 'App\Http\Controllers\ProfileController@join_team');
Route::get('/leave-team/{user_id}', 'App\Http\Controllers\ProfileController@leave_team');
Route::get('/my-schedule/{user_id}', 'App\Http\Controllers\ProfileController@my_schedule');
//===END PROFILE USER===//



/* ==========================*************************************==========================
	 										END USER BACK-END
	 ============================*************************************========================== */



