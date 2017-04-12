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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
