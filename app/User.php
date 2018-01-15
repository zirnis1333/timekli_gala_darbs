<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function isAdmin() {
        return ($this->role == 2);
    }
    public function raksti() {
        return $this->hasMany('App\Raksts');
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
}
