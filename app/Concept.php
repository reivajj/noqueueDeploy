<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    protected $fillable = ['name', 'description', 'images', 'geo_localization', 'user_id_owner'];

    public function queues()
    {
        return $this->hasMany('App\Queue');
    }

}
