<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliations extends Model
{
    protected $fillabl=['application_date','type_procedure', 'affiliation_type','affiliation_subtype', 'regime',
        'affiliated_type', 'contributing_type', 'code', 'status', 'user_id'];

    public function user_id(){

        return $this->belongsTo('App\User');
    }

    public function employer()
    {
        return $this->hasMany('App\Employer');
    }

    public function afiliates_information()
    {
        return $this->hasMany('App\Afiliates_information');
    }

    public function selectable()
    {
        return $this->hasMany('App\Selectable');
    }

    public function affiliations_document()
    {
        return $this->hasMany('App\Affiliations_documents');
    }

    public function report_novelty()
    {
        return $this->hasMany('App\Report_novelty');
    }

    public function territorial_entity()
    {
        return $this->hasMany('App\Territorial_entity');
    }

}
