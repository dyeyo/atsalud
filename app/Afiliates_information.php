<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliates_information extends Model
{
    protected $fillable=['name','second_name', 'surename', 'second_surname', 'doc_type',
        'doc_number', 'birthdate', 'sex', 'ethnic_group', 'disability', 'type_disability',
        'condition', 'sisben', 'stratum', 'eduactive_level', 'special_population',
        'civil_status', 'special_population', 'contribution_base', 'address', 'zone',
        'location', 'neighborhood', 'landline', 'mobile_phone', 'email', 'affiliation_id',
        'ips_id', 'municipality_id'];

    public function affiliation()
    {
        return $this->belongsTo('App\Affiliations');
    }

    public function ips()
    {
        return $this->belongsTo('App\Ips');
    }

    public function municipality()
    {
        return $this->belongsTo('App\Municipalitie');
    }

    public function clinic_history()
    {
        return $this->hasMany('App\Clinic_history');
    }

    public function report_novelty()
    {
        return $this->hasMany('App\Report_novelty');
    }

    public function risk_capture(){
        return $this->hasMany('App\Risk_capture');
    }
}
