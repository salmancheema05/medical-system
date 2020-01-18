<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\office_detail;
use App\city;
use department;
use Validator;
class doctordetail extends Controller
{
    public function insert_data(Request $request){
  	    $validator = Validator::make($request->all(), [ 
  	    	'doctor_id'     => 'required',
  	    	'days'          => 'required',
  	    	'address'       => 'required',
  	    	'fee'           => 'required',
  	    	'phone'         => 'required',
            'city_name'     => 'required',
            'department_id' => 'required',
            'experience'    => 'required',
     	]);
     	if ($validator->fails()) { 
            return response()->json(['error'=> $validator->errors()]);            
        }
        else{
     	    $exist_city = city::where('city_name' ,$request->city_name)->first();
     	    if ($exist_city!=null) { 
     	        office_detail::create([
     	        	'doctor_id'     => $request->doctor_id,
     	        	'city_id'       => $exist_city->city_id,
     	        	'days'          => $request->days,
     	        	'department_id' => $request->department_id,
     	        	'morning_time'  => $request->morning_time,
     	        	'evening_time'  => $request->evening_time,
     	        	'address'       => $request->address,  
     	        	'fee'           => $request->fee,
     	        	'phone'         => $request->phone,
                    'experience'    => $request->experience,
     	        ]);	
     	        return response()->json('You have been registered');
            } 
     	    else{
                $add_city = city::create(['city_name'  => $request->city_name]);
                 office_detail::create([
     	        	'doctor_id'     => $request->doctor_id,
     	        	'city_id'       => $add_city->id,
     	        	'days'          => $request->days,
     	        	'department_id' => $request->department_id,
     	        	'morning_time'  => $request->morning_time,
     	        	'evening_time'  => $request->evening_time,
     	        	'address'       => $request->address,
     	        	'fee'           => $request->fee,
     	        	'phone'         => $request->phone,
                    'experience'    => $request->experience,
     	        ]);	
     	        return response()->json('You have been registered');
            } 
        }     
    }
}
