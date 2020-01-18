<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\city;
use DB;
use App\user;
class websitepages extends Controller
{
    public function index(){
        return view('pages.welcome');
    }
    public function finddoctor(){
        return view('pages.finddoctor');
    }
    public function department(){
      return view('pages.department');
    }
    public function search($id=null){
     
      if ($id !=null) {
        $data =city::where('city_name', $id)->first();
        //dd($data->city_id);
        $url = 'http://localhost/doctorapp/api/doctors_list/?'.$data->city_id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT,30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result=curl_exec($ch);
        $doctors=json_decode($result);
        curl_close($ch); 
      }
      else{
        $ch = curl_init('localhost/doctorapp/api/doctors_list');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result=curl_exec($ch);
        $doctors=json_decode($result);
        curl_close($ch);
      } 
      return view('pages.searchdoctor',array('doctors' =>$doctors));
    }
    public function register(){
      return view('pages.signup');
    }
    public function doctor_login(){
      return view('pages.login');
    }
    public function doctor_view($id){
      $data= user::find($id);
      if ($data != null) {
        $doctor_id = $data->id;
        $doctor = DB::table('users')
        ->join('office_details', 'users.id', '=', 'office_details.doctor_id')
        ->join('cities', 'cities.city_id', '=', 'office_details.city_id')
        ->join('departments', 'departments.department_id', '=', 'office_details.department_id')
        ->where('office_details.doctor_id',$doctor_id)
        ->first();
        return view('pages.view',array('doctor' => $doctor));
      }
      else{
        return redirect('/');
      }
    }

}
