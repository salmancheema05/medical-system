<!DOCTYPE html>
<html lang="en">
    <!-- Required Meta Tags -->
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Medino</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('public/styles/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
   
    <link rel="stylesheet" href="{{url('public/styles/css/bootstrap-4.1.3.min.css')}}">
    
</head>
<body>
<div class="container mt-2">
       <div class="card  ">
       <div class="card-header bg-primary text-white"><h4 class="">{{'Welcome to DR'.' '.ucwords(Auth::user()->name)}}</h4></div>
        <div class='card-body'>
    
         <form action='{{url("clinic_detail")}}' method="post" id="doctor_detail">
           @csrf
            <div class="form-group">
              <label for="">Doctor Department</label>
                <select class="form-control" name="department" id='display-data'></select>
            </div>
            <div class="form-group">
              <div class="form-group">
                   <label for="">Doctor City</label>
                  <input type="text" class="form-control" name='doctor_city'  placeholder='Doctor City'>
              </div>
            </div>
            <div class="form-group">
                 <label for="">Doctor Clinic Address</label>
                <input type="text" class="form-control" name='address'  placeholder='Doctor Clinic Address'>
            </div>
            <div class="form-group">
                 <label for="">Doctor Available Days</label>
                <input type="text" class="form-control" name='available_days'  placeholder='mon,tue,wed...'>
            </div>
            <div class="form-group">
                 <label for="">Doctor Phone Number</label>
                <input type="text" class="form-control" name='phone_no'  placeholder='Doctor Phone Number '>
            </div>
              <div class="form-group">
                <label for="">Doctor Fee</label>
                  <input type="text" class="form-control" name='doctor_fee'  placeholder='Doctore Fee'>
              </div>
              <div class="form-group">
                <label for="">Doctor Morning Time</label>
                  <input type="text" class="form-control" name='doctor_morning_time' placeholder="8:00am- 9:00am">
              </div>
              <div class="form-group">
                <label for="">Doctor Evening Time</label>
                  <input type="text" class="form-control" name='doctor_evening_time' placeholder="6:00pm- 9:00pm">
              </div>
              <div class="form-group">
                <input type="button" class="btn btn-primary" name='next' id='next' value="Next">
              </div>
          </form>
        </div>
     </div>
   </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{url('public/styles/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
  <script src="{{url('public/ajax/department.js')}}"></script>
</body>
</html>
<script>
  $(document).ready(function(){
    $('#next').click(function(){
      var url  =  $('#doctor_detail').attr('action');
      var data =  $('#doctor_detail').serialize()
      $.ajax({
        method: 'post',
        url: url,
        data:data,
        dataType:'json',
        success:function(data){
          if (data.error) {
            alert(data.error);
          }
          else{
            alert(data.success);
            $('#doctor_detail')[0].reset();
            location.reload(true);
          } 
        }
      });
    });
  });
</script>