<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference_patients extends Model
{
    protected $fillable=['attention_type','accompanying_name', 'accompanying_lastname', 'accompanying_lastname',
        'email', 'medical_assessment', 'nursing_care', 'rehabilitation_service', 'medicines', 'supplies',
        'municipalities_id', 'ips_id', 'health_teams_id'];

    public function municipalities()
    {
        return $this->belongsTo('App\Municipalitie');
    }

    public function ips()
    {
        return $this->belongsTo('App\Ips');
    }

    public function health_teams()
    {
        return $this->belongsTo('App\Health_teams');
    }

    public function reference_patients()
    {
        return $this->hasMany('App\Reference_patients');
    }

}
