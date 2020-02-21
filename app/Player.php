<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table='player';
    protected $fillable = ['sports', 'name', 'address', 'phone_no', 'email', 'gender', 'blood_group', 'date_of_birth', 'age', 'physical_problem', 'profile'];
}
