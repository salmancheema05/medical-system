<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class doctors_list extends Controller
{
    public function list($id){
        $doctors = DB::table('users')
        ->join('office_details', 'users.id', '=', 'office_details.doctor_id')
        ->join('cities', 'cities.id', '=', 'office_details.city_id')
        ->join('departments', 'departments.id', '=', 'office_details.department_id')
        ->where('office_details.city_id',$id)
        ->get();
        return response()->json($doctors,200);
    }
}