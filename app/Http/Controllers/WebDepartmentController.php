<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\department;
class WebDepartmentController extends Controller{
    public function get_data(){
       $data = department::all();
       $output='';
        $output.='<option value="">Department</option>';
        foreach ($data as $row) {
            $output.='<option value="'.$row->department_id.'">'.$row->department_name.'</option>';
        }
       return response()->json($output);
    }

}
