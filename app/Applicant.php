<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $guarded = [];
    protected $dates = [
        'admission_date'
    ];
   // public $timestamps = true;
}
