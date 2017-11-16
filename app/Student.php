<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
       protected $fillable = ['fullName','fatherName','motherName','email','contact','gender','birthDate',
    		'class','section','roll','address'] ;
}
