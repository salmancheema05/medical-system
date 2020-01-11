<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class office_detail extends Model
{
      protected $fillable = ['doctor_id','city_id','days','department_id','morning_time','evening_time','address','fee','phone'];
}
