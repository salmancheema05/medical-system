@extends('layout.website')
@section('contant')
 <div class="container mt-5 mb-5">
 	<div class="row mb-5">
 		<div class="col-lg-12">
 			<div class="card">
 				<div class="card-header"><h3>{{'Dr'.' '.ucwords($doctor->name)}} <span class="float-right">{{ucwords($doctor->department_name)}}</span></h3></div>
 				<div class="card-body">
 					<div class="row">
 					    <div class="col-lg-3">
 						    <img src="{{url('public/1.png')}}" height='220' width="100%">
 					    </div>
 					    <div class="col-lg-9">	
 						    <h4>Consultant with experience of {{$doctor->experience}} years
                              <span class="float-right">{{'Doctor Fee :'.' '.$doctor->fee}}</span>
 						    </h4>	
 						    <hr>
 						    <p>Clinic Address: {{$doctor->address}}</p>
 						    <p>{{'Morning Time :'.' '.$doctor->morning_time}}
 						    	<span class="float-right">{{'Everning Time :'.' '.$doctor->evening_time}}</span>
 						    </p>
                            <p>Doctor Present Days: {{$doctor->days}}</p>
                            <h4 class="bg-danger text-white text-center p-2">{{'Appointment Number:'.'  '.$doctor->phone}}</h4>
 					    </div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="card">
 				<div class="card-header"><h3> {{'About Dr'.' '.ucwords($doctor->name)}}</h3></div>
 				<div class="card-body">
 					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 	            </div>
 			</div>
 		</div>
 	</div>
 </div>
@endsection