<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentInfo extends Model
{
    protected $guarded = [];

    public function sessionsActive()
    {
        return $this->belongsTo('App\Sessions', 'sessionId', 'id');
    }

}
