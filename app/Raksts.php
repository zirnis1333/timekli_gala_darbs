<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Raksts extends Model
{

    public function tagi() {
        return $this->hasMany('App\raksta_tagi');
    }

    public function Autors() {
        return $this->belongsTo('App\User');
    }
}
