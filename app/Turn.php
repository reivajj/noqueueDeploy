<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $fillable = ['email', 'queue_id', 'user_id'];


    public function queue()
    {
        return $this->belongsTo('App\Queue');
    }
}
