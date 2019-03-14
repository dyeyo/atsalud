<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health_teams extends Model
{
    protected $fillable=['name', 'company_name', 'nit', 'attention_schedule', 'municipality_id'];

    public function municipalitie(){
        return $this->belongsTo('App\Municipalities');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function reference_patient()
    {
        return $this->hasMany('App\Reference_patients');
    }
}
