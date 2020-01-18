@extends('layout.website')
@section('contant')
<div class="container mt-5 mb-5">
  <div class='row mt-5 mb-5' id='display_doctors'>
  	 @foreach ($doctors as $row) 
  	 <div class="col-sm-6 col-lg-4 mb-5">
          <div class="card">
            <div class="card-body">
               <img src="{{url('public/1.png')}}" width="100%">
               <table class="table mt-4 text-center">
                  
                  <tr>
                    <th>Name</th>
                    <td>{{'Dr'.' ' . ucwords($row->name)}}</td>
                  </tr>
                  <tr>
                    <th>Department</th>
                    <td>{{ucwords($row->department_name)}}<br>{{$row->public_name}}</td>
                  </tr>
                  <tr>
                    <th>City </th>
                    <td>{{ucwords($row->city_name)}}</td>
                  </tr>
                  
                </table>
              
              <p class="text-center mt-3"><a href='{{url("doctor_view/".$row->id , str_slug("$row->name","-"))}}' class="btn btn-primary btn-sm">View Detail</a></p>
            </div>
          </div>
       </div>
       @endforeach
  </div>
</div>

@endsection
