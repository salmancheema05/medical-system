@extends('layout.profile')
@section('tittle',ucwords(Auth::user()->name))
@section('contant')
<?php use App\aboutdoctor; $data = aboutdoctor::where('doctor_id',Auth::user()->id)->first(); 
?>
@if($data ==null)
<form action="{{url('about_create')}}" id="insert_form">
	<div class="form-group">
		@csrf
		<textarea rows="10" cols="50" class="form-control" name="about_insert" placeholder="{{ucwords(Auth::user()->name).' '.'write her about yourself'}}" style="resize: none"></textarea>
	</div>
	<div class="form-group">
		<input type="button" name="save" id="save" class="btn btn-primary" value="Save">
	</div>
</form>
@else
<form action="">
	<div class="form-group">
		<textarea rows="10" cols="20" class="form-control" name="about_insert" style="resize: none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
	</div>
	<div class="form-group">
		<input type="button" name="update" id="update" class="btn btn-primary" value="Update">
	</div>
</form>
@endif
@endsection
