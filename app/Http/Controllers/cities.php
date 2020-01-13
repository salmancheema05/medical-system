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
      $output .="
        <div class='col-lg-3'>
          <div class='card'>
          <a href=".url('search/'.$row->city_name)." class='card-header text-center'>".ucwords($row->city_name)."</a>
          </div>
        </div>";
    }
    return response()->json($output);
  }
  public function select_cities(){
    $data = city::all();
    $output='<option>Select City</option>';
    foreach ($data as $row) {
      $output .="<option value='$row->city_id'>".$row->city_name."</option>";
    }
    return response()->json($output);
  }
 
}
