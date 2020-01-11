<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
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
    public function search(){
      return view('pages.searchdoctor');
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
