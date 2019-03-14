<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable=['business_name', 'doc_type', 'doc_number', 'contributing_type', 'address',
        'landline', 'phone_mobile', 'email', 'affiliation_id', 'municipality_id'];

    public function affiliation()
    {
        return $this->belongsTo('App\Affiliations');
    }

    public function municipality()
    {
        return $this->belongsTo('App\Municipalitie');
    }
}
