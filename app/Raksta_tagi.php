<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raksta_tagi extends Model
{
    public function raksts() {
        return $this->belongsTo('App\raksts');
    }

    public function tags() {
        return $this->belongsTo('App\tags');
    }
}
