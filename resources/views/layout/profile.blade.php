<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{url('public/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('public/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>Doctorapp Dr.Salman</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand font-italic text-capitalize" href="{{url('dashboard')}}">{{'Dr'.' '.Auth::user()->name}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="public/assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{'Dr'.' '.ucwords(Auth::user()->name)}}</h5>
                                </div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#image_modal"><i class="fas fa-user mr-2"></i>Upload Image</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="{{url('logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->

<div class="nav-left-sidebar sidebar-dark">
  <div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav flex-column">
            <li class="nav-item "><a class="nav-link" href="{{url('home')}}">Dashboard</a></li>

            <li class="nav-item "><a class="nav-link" href="{{url('about')}}">{{'About of'.' '. ucwords(Auth::user()->name)}}</a></li>
            <li class="nav-item "><a class="nav-link" href="{{url('doctor_update')}}" >Doctor Information update</a></li>
            <li class="nav-item "><a class="nav-link" href="" data-toggle="modal" data-target="#image_modal">Upload Image</a></li>
            <li class="nav-item "><a class="nav-link" href="#">Setting</a></li>
            <li class="nav-item "><a class="nav-link" href="{{url('logout')}}">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

<!-- ============================================================== -->
<!-- upload image modal-->
<!-- ============================================================== -->
<div class="modal" id="image_modal">
<div class="modal-dialog">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Image Upload</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body">
<form>
    <div class="form-group">
      <label for="">Image</label>
        <input type="file" class="form-control" name='image' id="image">
    </div>

    <div class="form-group">
        <input type="button" class="btn btn-primary" name='upload' id='upload' value="Upload">
    </div>
</form>
</div>

</div>
</div>
</div>
<!-- ============================================================== -->
<!-- end upload image modal-->
<!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="ecommerce-widget">

                        <div class="row" id='display_data'>

                        </div>
                        <div class="row">
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="card">
                                    <h5 class="card-header">@yield('tittle')</h5>
                                    <div class="card-body">@yield('contant')</div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

                        </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{url('public/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{url('public/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{url('public/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{url('public/assets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{url('public/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{url('public/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{url('public/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{url('public/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <!-- <script src="{{url('public/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{url('assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{url('assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{url('assets/libs/js/dashboard-ecommerce.js')}}"></script> -->
    <!-- <script src='{{url("public/ajax/dr_information.js")}}'></script> -->

</body>

</html>
<script type="text/javascript">
$(document).ready(function(){
    $('#save').click(function(){
        var url =$('#insert_form').attr('action');
        var data =$('#insert_form').serialize();
        $.ajax({
            type:'post',
            url:url,
            data:data,
            dataType:'json',
            success:function(data){
                if (data.error) {
                    alert(data.error);
                }
                else{
                    alert(data.success);
                    window.location.replace("home");
                    
                }
            }
       });
    });
});
get_information();
function get_information(){
  $.ajax({
    type:'get',
    url:'office_detail',
    dataType:'json',
    success:function(data){
        $('#display_data').html(data);
    }
  });
}
get_about()
function get_about(){
  $.ajax({
    type:'get',
    url:'get_about',
    dataType:'json',
    success:function(data){
        $('#data').html(data);
    }
  });
}

</script>