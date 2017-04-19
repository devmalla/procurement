<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
        'name',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function mpp(){
        return $this->belongsTo('App\Mpp');
    }

    public function app(){
        return $this->belongsTo('App\App');
    }

}
