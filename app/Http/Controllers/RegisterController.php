<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\city;
use App\office_detail;
use Validator;
class RegisterController extends Controller
{
  public function signup(Request $request){

    $validate = Validator::Make($request->all(),[ 
      'doctor_name'   => 'required',
      'doctor_email'  => 'required|email',
      'pmdc_no'       => 'required',
      'password'      => 'required',
      'gender'        => 'required',
    ]);
    if ($validate->fails()) {
      return json_encode(['error' => $validate->errors()->all()]);
    }
    $input = $request->all(); 
    $input['password'] = bcrypt($input['password']); 
    $ch = curl_init("http://localhost/doctorapp/api/register");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,  $input);
    curl_exec($ch);
    curl_close($ch);
    return json_encode(['success' => "Your have registed"]);
  }
  public function clinic_detail(Request $request){
    $request->validate([
      'department'            => 'required',
      'doctor_city'           => 'required',
      'doctor_clinic_address' => 'required',
      'doctor_available_days' => 'required',
      'doctor_fee'            => 'required',
      'doctor_phone_no'       => 'required'
   ]);
    $is_city = city::where('name', $request->doctor_city)->first();
    if ($is_city==true) {
      $doctor_detail = office_detail::create([
        'doctor_id'      =>session()->get('doctor_id'),
        'city_id'        => $is_city->id,
        'department_id'  => $request->department,
        'morning_time'   => $request->doctor_morning_time,
        'evening_time'   => $request->doctor_evening_time,
        'days'           => $request->doctor_available_days,
        'address'        => $request->doctor_clinic_address,
        'fee'            => $request->doctor_fee,
        'phone'          => $request->doctor_phone_no,
      ]);
      Session::flush();
      return redirect('/');
   }
   else{
     $city = city::create(['name' => $request->doctor_city]);
     $doctor_detail = office_detail::create([
       'doctor_id'      =>session()->get('doctor_id'),
       'city_id'        => $city->id,
       'department_id'  => $request->department,
       'morning_time'   => $request->doctor_morning_time,
       'evening_time'   => $request->doctor_evening_time,
       'days'           => $request->doctor_available_days,
       'address'        => $request->doctor_clinic_address,
       'fee'            => $request->doctor_fee,
       'phone'          => $request->doctor_phone_no,
     ]);
     Session::flush();
     return redirect('/');
   }

}
public function loginsystem(Request $request){
  $request->validate([
    'doctor_email'  => 'required',
    'password'      => 'required',

 ]);
 $doctor= account::where(
         [
             ['email','=',$request->doctor_email],
             ['password','=',$request->password ]
         ]
     )->first();
     if ($doctor==true){
         session::put('full_name',$doctor->full_name);
         session::put('login_id',$doctor->id);
        return redirect('dashboard');
     }
     return back()->with('error','Your email and password are wrong');
}
public function logout(){
        Session::flush();
        return redirect('login');
    }
}
