<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipalitie extends Model
{
    protected $fillable=['name','departament_id'];

    public function departament()
    {
        return $this->belongsTo('App\Departments');
    }

    public function ips()
    {
        return $this->hasMany('App\Ips');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function employer()
    {
        return $this->hasMany('App\Employer');
    }

    public function  health_team(){
        return $this->hasMany('App\Health_teams');
    }

    public function afiliates_information()
    {
        return $this->hasMany('App\Afiliates_information');
    }

    public function reference_patient()
    {
        return $this->hasMany('App\Reference_patients');
    }
}
