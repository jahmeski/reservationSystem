<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MySchedule extends Model
{
    protected $fillable = [
        'user_id', 'event_name', 'event_desc','event_loc', 'schedule'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
