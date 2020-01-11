<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\city;
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
    public function search($id){
      $data =city::where('city_name', $id)->first();
      $id= $data->id; 
      $ch = curl_init('localhost/doctorapp/api/doctors_list/'.$id);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result=curl_exec($ch);
      curl_close($ch);
      $doctors=json_decode($result);
      return view('pages.searchdoctor',array('doctors' =>$doctors));
    }
    public function dashboard(){
      if (Session::get('login_id')!=null) {
        return view('profile.home');
      }
      return redirect('login');
    }
  
    public function register(){
      return view('pages.signup');
    }
    public function doctor_login(){
      return view('pages.login');
    }
}
