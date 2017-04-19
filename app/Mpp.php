<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mpp extends Model
{
    protected $fillable = [
        'name',
        'project_name',
        'fiscal_year',
        'budget_sub_head_no',
        'procurement_description',
        'procurement_category',
        'contract_type',
        'duration',
        'status',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function bid(){
        return $this->hasMany('App\Bid');
    }
}
