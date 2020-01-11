<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\office_detail;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\TargetPatient;
class Clinicdetail extends Controller
{
    public function get_information(){
         $data = office_detail::where('doctor_id',Auth::user()->id)->first();
         $target = TargetPatient::where('doctor_id',Auth::user()->id)->first();
         $output='
         <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-12">
             <div class="card">
                 <div class="card-body text-center">
                     <h5 class="text-muted">Doctor Fee</h5>
                     <div class="metric-value d-inline-block">
                         <h3 class="mb-1">Rs'.' '.$data->fee.'</h3>
                     </div>

                 </div>

             </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
             <div class="card">
                 <div class="card-body">
                     <table class="table table-sm">
                       <tr>
                         <td>Morning Time</td>
                         <td>'.$data->morning_time.'</td>
                       </tr>
                       <tr>
                         <td>Evening Time</td>
                         <td>'.$data->evening_time.'</td>
                       </tr>
                     </table>
                 </div>

             </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
             <div class="card">
                 <div class="card-body text-center">
                     <h5 class="text-muted">Check Patient Target</h5>
                     <div class="metric-value d-inline-block">';
                        if ($target != null) {
                            $output .= '<h3 class="mb-1">'.$target->doctor_target_patients.'</h3>';
                           
                        }
                        else{
                            $output .= '<h5 class="mb-1">Create Patient Target</h5>';
                        }
                     $output .='</div>

                 </div>
             </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
             <div class="card">
                 <div class="card-body text-center">
                     <h5 class="text-muted">Total Patient</h5>
                     <div class="metric-value d-inline-block">
                         <h3 class="mb-1">16</h3>
                     </div>

                 </div>
             </div>
         </div>';
        return response()->json($output);
    }
    public function insert_data(Request $request){
        $validator = Validator::make($request->all(), [ 
            'department'     => 'required',
            'doctor_city'    => 'required',
            'address'        => 'required',
            'available_days' => 'required',
            'phone_no'       => 'required',
            'doctor_fee'     => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=> $validator->errors()->all()]);            
        }
        else{
            $data = [
               'doctor_id'     => Auth::user()->id,
               'department_id' => $request->department,
               'city_name'     => $request->doctor_city,
               'address'       => $request->address,
               'days'          => $request->available_days,
               'phone'         => $request->phone_no,
               'fee'           => $request->doctor_fee,
               'morning_time'  => $request->doctor_morning_time,
               'evening_time'  => $request->doctor_evening_time,
            ];
            $ch = curl_init('http://localhost/doctorapp/api/office_detail');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST,true);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
            $response  = curl_exec($ch);
            curl_close($ch);
            return response()->json(['success' => 'ok']);     
        }

    }
    public function create_target_patient(Request $request){
        $validator = Validator::make($request->all(), [ 
            'insert_target_patient'  => 'required', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=> $validator->errors()->all()]);            
        }
        else{
            TargetPatient::create([
               'doctor_id' => Auth::user()->id,
               'doctor_target_patients' => $request->insert_target_patient,
            ]);
            return response()->json(['success' => 'ok']); 
        }
    }
}
