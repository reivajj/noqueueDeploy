<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $fillable = ['max_len', 'average_time'];


    public function concept()
    {
        return $this->belongsTo('App\Concept');
    }

    public function turns()
    {
        return $this->hasMany('App\Turns');
    }
}
