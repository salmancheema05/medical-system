@extends('layout.profile')
@section('tittle','Today patient List')
@section('contant')
<div class="table-responsive">
<table class="table text-center">
    <thead class="bg-light">
        <tr class="border-0">
            <th class="border-0">#</th>
            <th class="border-0">Patient Name</th>
            <th class="border-0">Patient phone Number</th>
            <th class="border-0">Patient Age</th>
            <th class="border-0">Patient gender</th>
            <th class="border-0">checked /Delete patient</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Ali Raza</td>
            <td>033432424232</td>
            <td>20</td>
            <td>Male</td>
            <td><button class='btn btn-outline-primary btn-sm'>checked</button></td>
        </tr>
    </tbody>
</table>
</div>
@endsection
