<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\office_detail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $data = office_detail::all()->where('doctor_id',Auth::user()->id)->first();
        if ($data) {
            return view('profile.home');

        }
        else{
            return view('profile.doctordetail'); 
        }  
    }
    public function doctor_update(){
        return view('profile.updatedata');
    }
    public function about(){
        return view('profile.about');
    }
}
