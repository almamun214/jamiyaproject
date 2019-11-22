<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class general extends Model
{
  protected $guarded = [];
  protected $primaryKey = 'generals_id';
    protected $dates = [
        'date'
    ];
}
