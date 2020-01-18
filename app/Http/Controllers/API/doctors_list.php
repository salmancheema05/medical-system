<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\city;
use DB;
class doctors_list extends Controller
{
  public function list($id=null){
    if ($id !=null) {
      $data =city::where('city_name', $id)->first();
      $city_id= $data->city_id;
      $doctors = DB::table('users')
      ->join('office_details', 'users.id', '=', 'office_details.doctor_id')
      ->join('cities', 'cities.city_id', '=', 'office_details.city_id')
      ->join('departments', 'departments.department_id', '=', 'office_details.department_id')
      ->where('office_details.city_id',$city_id)
      ->get();
    }
    else{
      $doctors = DB::table('users')
      ->join('office_details', 'users.id', '=', 'office_details.doctor_id')
      ->join('cities', 'cities.city_id', '=', 'office_details.city_id')
      ->join('departments', 'departments.department_id', '=', 'office_details.department_id')
      ->get(); 
    }
    return response()->json($doctors,200);
  }
}
