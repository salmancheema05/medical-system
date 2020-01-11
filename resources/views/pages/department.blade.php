@extends('layout.website')
@section('contant')
<div class="container">
<div class='row mt-5 mb-5'>
    @for($i=1;$i< 30;$i++)
      <div class='col-lg-2 mb-5'>
        <div class='card'>
           <a href=""><p class="text-center card-header">Faisalabad</p></a>
        </div>
     </div>
    @endfor
</div>
</div>
@endsection
