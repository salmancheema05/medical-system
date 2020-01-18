<?php
Route::get('register','websitepages@register');
Route::get('/','websitepages@index');
Route::get('find_doctor','websitepages@finddoctor');
Route::get('doctor_view/{id}/{slug}','websitepages@doctor_view');
Route::get('department','websitepages@department');
Route::get('search/{id?}','websitepages@search');
Route::get('login','websitepages@doctor_login');
Route::post('clinic_detail','RegisterController@clinic_detail');
Route::post('loginsystem','RegisterController@loginsystem');
Route::get('logout','RegisterController@logout');
Route::group(['middleware' => 'ajax-response'],function(){
    Route::get('get_city','WebDepartmentController@get_city');
    Route::get('office_detail','Clinicdetail@get_information');
    Route::get('get_cities','cities@get_cities');
    Route::post('clinic_detail','Clinicdetail@insert_data');
    Route::get('department_detail','WebDepartmentController@get_data');
    Route::post('about_create','Clinicdetail@about_create');
    Route::get('get_about','Clinicdetail@get_about');
    Route::get('select_cities','cities@select_cities');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/doctor_update', 'HomeController@doctor_update'); 
Route::get('/about', 'HomeController@about'); 