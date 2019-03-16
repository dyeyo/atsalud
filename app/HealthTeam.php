<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthTeam extends Model
{
    protected $table = 'health_teams';
    protected $fillable = ['business_name','company_name','nit','attention_schedule','municipality_id'];
    public $timestamps = true;

    public function patientsReference()
    {
        return $this->hasMany(PatientReference::class);
    }
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
