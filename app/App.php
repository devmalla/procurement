<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = [

        'fiscal_year',
        'procurement_description',
        'procurement_category',
        'contract_type',
        'estimated_cost',
        'date_for_tender',
        'date_of_agreement',
        'bid_invitation_date',
        'date_of_consent',
        'bid_opening_date',
        'bid_evaluation_completion_date',
        'date_of_approval',
        'loi_issue_date',
        'contract_singing_date',
        'work_initiation_date',
        'work_completion_date',
        'status',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
