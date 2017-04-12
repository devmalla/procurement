<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
