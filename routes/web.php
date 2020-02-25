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
});
Route::get('/member',function(){
	return view('memberLogin');
});

Route::post('/memberLogin','memberController@login');

Route::get('/member/logout','memberController@logout');

Route::get('/admin/logout','adminController@logout');

Route::get('/admin/ViewMembers','adminController@ViewMembers');

Route::get('/newMember','memberController@register');

Route::get('/memberRegister',function(){
	return view('memberRegister');
});

Route::get('/admin',function(){
	return view('adminLogin');
});

Route::get('/adminViewMember',function(){
	return view('adminViewMember');
});

Route::post('/admin/maintenance','adminController@maintenance');

Route::post('/adminLogin','adminController@login');

Route::get('/complaint',function(){
	return view('complaint');
});
Route::post('/addcomplaint','complaintController@addComplaint');

Route::get('/viewComplaint','complaintController@viewComplaint');

Route::get('/adminPanel',function(){
	return view('adminPanel');
});

Route::get('/memberPanel',function(){
	return view('memberPanel');
}); 

Route::get('/complaintView',function(){
	return view('complaintView');
});

Route::get('/admin/addNotice',function(){
	return view('addNotice');
});
Route::post('/admin/adminNotice','adminController@addNotice');
Route::get('/viewNotice',function(){
	return view('viewNotice');
});