<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetPatient extends Model
{
    protected $fillable = ['doctor_id','doctor_target_patients'];
}
