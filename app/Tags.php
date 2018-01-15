<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function raksti() {
        return $this->hasMany('App\raksta_tagi');
    }
}
