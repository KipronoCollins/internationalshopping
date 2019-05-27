<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/adminhome', 'AdminController@index')->name('adminhome');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('submitquote', 'trialController@submit')->name('submitquote')->middleware('checkAuth');

Route::get('data', 'trialController@checkSessionData')->name('data');

Route::get('dashboard', 'displayUser@dashboard')->name('dashboard')->middleware('verified');

Route::get('admin/requests', 'displayAdmin@requests')->name('requests');

Route::resource('mydetails', 'userController')->middleware('auth');

Route::get('/newestimate/{rid}', 'displayAdmin@newestimate')->name('newestimate');

Route::post('/storenewestimate/{rid}', 'displayAdmin@storenewestimate')->name('newestimate.store');

Route::get('myestimates', 'displayUser@estimates')->name('myestimates')->middleware('verified');

Route::get('myinvoices', 'displayUser@myinvoices')->name('myinvoices')->middleware('verified');

Route::get('printinvoice/{iid}', 'displayUser@printinvoice')->name('printinvoice')->middleware('verified');

Route::get('/approveestimate/{eid}', 'displayUser@approveestimate')->name('approveestimate');

Route::post('/userreviewestimate/{eid}', 'displayUser@reviewestimate')->name('reviewestimate');

Route::get('/editestimate', 'displayAdmin@editestimate')->name('editestimate');

Route::get('/changeestimate/{eid}', 'displayAdmin@changeestimate')->name('changeestimate');

Route::post('/savechangedestimate/{eid}', 'displayAdmin@savechangedestimate')->name('savechangedestimate');

Route::post('/searchestimate', 'displayAdmin@searchestimate')->name('searchestimate');

Route::get('/mypurchases', 'displayUser@mypurchases')->name('mypurchases');

Route::get('/review', 'displayUser@makereview')->name('makereview');

Route::post('/savereview', 'displayUser@savereview')->name('savereview');

Route::get('/contactsupport', 'displayUser@displaycustomersupport')->name('contactsupport');

Route::get('/userinbox', 'displayUser@displayuserinbox')->name('userinbox');

Route::get('/user/reply/{id}', 'displayUser@displayuserreply')->name('displayuserreply');

Route::post('/user/savereply', 'displayUser@usersavereply')->name('usersavereply');

Route::post('/usersavemessage', 'displayUser@usersavemessage')->name('usersavemessage');

Route::get('/admin/invoices', 'displayAdmin@invoices')->name('admininvoices');

Route::get('/admin/admininbox', 'displayAdmin@displayadmininbox')->name('displayadmininbox');

Route::get('/admin/reply/{id}', 'displayAdmin@displayadminreply')->name('displayadminreply');

Route::post('/admin/savereply', 'displayAdmin@adminsavereply')->name('adminsavereply');

Route::get('/admin/manageuseraccounts', 'displayAdmin@displayuseraccounts')->name('displayuseraccounts');

Route::get('/admin/admindisplayedituser/{id}', 'displayAdmin@admindisplayedituser')->name('admindisplayedituser');

Route::post('/admin/adminedituser', 'displayAdmin@adminedituser')->name('adminedituser');

Route::get('/admin/managereviews', 'displayAdmin@managereviews')->name('managereviews');

Route::post('/admin/managereviews', 'displayAdmin@reviewstatus')->name('reviewstatus');

Route::get('/admin/adminsales', 'displayAdmin@adminsales')->name('adminsales');

Route::get('/admin/printinvoice/{iid}', 'displayAdmin@printinvoice')->name('adminprintinvoice');

Route::post('admin/newuser', 'displayAdmin@newuser')->name('adminnewuser');



Route::prefix('superadmin')->group(function(){
    Route::get('/login', 'Auth\SuperAdminLoginController@showLoginForm')->name('superadmin.login');
    Route::post('/login', 'Auth\SuperAdminLoginController@login')->name('superadmin.login.submit');
    Route::get('/', 'SuperAdminController@index')->name('superadmin.dashboard');
    Route::get('/manageaccounts', 'SuperAdminController@displayaccounts')->name('displayaccounts');
    Route::get('/displayedituser/{id}', 'SuperAdminController@displayedituser')->name('displayedituser');
    Route::post('/edituser', 'SuperAdminController@edituser')->name('edituser');
    Route::post('/newuser', 'SuperAdminController@newuser')->name('newuser');
    Route::get('/manageadmins', 'SuperAdminController@displayadmins')->name('displayadmins');
    Route::get('/displayeditadmin/{id}', 'SuperAdminController@displayeditadmin')->name('displayeditadmin');
    Route::post('/editadmin', 'SuperAdminController@editadmin')->name('editadmin');
    Route::post('/newadmin', 'SuperAdminController@newadmin')->name('newadmin');
});

Route::get('test', 'displayAdmin@test');

