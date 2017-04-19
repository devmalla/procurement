<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'organization',
        'admin_id',
        'first_name',
        'last_name',
        'password',
        'designation',
        'officer_class',
        'contact_one',
        'contact_two',
    ];

    public function organization(){
        return $this->hasMany('App\Organization');
    }

    public function bid(){
        return $this->hasMany('App\Bid');
    }

    public function mpp(){
        return $this->hasMany('App\Mpp');
    }

    public function app(){
        return $this->hasMany('App\App');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
