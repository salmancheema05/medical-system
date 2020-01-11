@extends('layout.profile')
@section('tittle','Doctor Detail Update')
@section('contant')
<form>
  <div class="form-group">
    <label for="">Doctor Department</label>
      <select class="form-control" name="city">
         <option value="">Department</option>
      </select>
  </div>
  <div class="form-group">
    <label for="">Doctor City</label>
      <select class="form-control" name="city">
         <option value="">City</option>
      </select>
  </div>
  <div class="form-group">
       <label for="">Doctor Clinic Address</label>
      <input type="text" class="form-control" name='doctor_fee' id="doctor_fee" placeholder='Doctor Clinic Address'>
  </div>
    <div class="form-group">
      <label for="">Doctor Fee</label>
        <input type="text" class="form-control" name='doctor_fee' id="doctor_fee" placeholder='Doctore Fee'>
    </div>
    <div class="form-group">
      <label for="">Doctor Timing</label>
        <input type="text" class="form-control" name='doctor_time' id="doctor_time" placeholder="6:00pm- 9:00pm">
    </div>
    <div class="form-group">
        <input type="button" class="btn btn-primary" name='update' id='update' value="Update">
    </div>
</form>
@endsection
