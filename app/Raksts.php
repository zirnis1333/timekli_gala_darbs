<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Raksts extends Model
{

    public function tagi() {
        return $this->hasMany('App\Raksta_tagi');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
