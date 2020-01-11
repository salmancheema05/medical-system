<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\office_detail;
class DetailApi extends Controller
{
    public function get_data(){
    	$data = office_detail::all()->get();
    	return response()->json($data);
    }
}
