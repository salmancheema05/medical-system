<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\city;
class cities extends Controller
{
  public function get_cities(){
    $data = city::all();
    $output='';
    foreach ($data as $row) {
      $output .='
        <div class="col-lg-3">
          <div class="card">
            <p class="card-header text-center city_id" id="'.$row->id.'">'.ucwords($row->city_name).'</p>
          </div>
        </div>
      ';
    }
    return response()->json($output);
  }
  public function city_search_doctor(Request $request){

    echo response()->json($request->city_id);
  }
}
