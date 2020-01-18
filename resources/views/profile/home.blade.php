@extends('layout.profile')
@section('tittle',ucwords(Auth::user()->name))
@section('contant')
<div id="data"></div>
@endsection
