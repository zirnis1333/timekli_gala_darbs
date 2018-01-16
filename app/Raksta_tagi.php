<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raksta_tagi extends Model
{
    protected $table = 'raksta_tagi';
    public function raksts() {
        return $this->belongsTo('App\Raksts');
    }

    public function tags() {
        return $this->belongsTo('App\Tags');
    }
}
