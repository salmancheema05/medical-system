<?php
use Illuminate\Http\Request;
Route::post('register','API\RegisterApi@register');
Route::post('login', 'API\RegisterApi@login');
Route::get('doctors_list/{id}', 'API\doctors_list@list');
Route::post('office_detail', 'API\doctordetail@insert_data');
Route::group(['middleware' =>'Auth:api'],function () {
    Route::get('get_detail', 'API\DetailApi@get_data');
});
