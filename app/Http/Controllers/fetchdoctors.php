<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class fetchdoctors extends Controller
{
    public function get_doctors(){
      $doctors = DB::table('users')
      ->join('office_details', 'users.id', '=', 'office_details.doctor_id')
      ->join('cities', 'cities.id', '=', 'office_details.city_id')
      ->join('departments', 'departments.id', '=', 'office_details.department_id')
      ->get();
      $output='';
      foreach ($doctors as $row) {
        $output.='
        <div class="col-lg-4 mb-5">
          <div class="card">
            <div class="card-body">
               <img src="public/1.png" width="100%">
               <table class="table mt-4 text-center">
                  <tr>
                    <th>Name</th>
                    <td> DR.'.' '.ucwords($row->name).'</td>
                  </tr>
                  <tr>
                    <th>Department</th>
                    <td>'.ucwords($row->department_name).'<br> '.$row->public_name .'</td>
                  </tr>
                  <tr>
                    <th>City </th>
                    <td>'.ucwords($row->city_name).'</td>
                  </tr>
               </table>
               <p class="text-center mt-3"><a href="" class="btn btn-primary btn-sm">View Detail</a></p>
            </div>
          </div>
       </div>
        ';
      }
      return response()->json($output);
    }
}