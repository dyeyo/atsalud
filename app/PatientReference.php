<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientReference extends Model
{
    protected $table = 'patients_reference';
    protected $fillable = ['attention_type','accompanying_name','accompanying_lastname','phone','email','medical_assessment','nursing_care','rehabilitation_service','medicines','supplies','afiliate_information_id','municipality_id','ips_id','health_team_id'];
    public $timestamps = true;

    public function annexesReference()
    {
        return $this->hasMany(AnnexeReference::class);
    }
    public function afiliateInformation()
    {
        return $this->belongsTo(AfiliateInformation::class);
    }
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
    public function ips()
    {
        return $this->belongsTo(Ips::class);
    }
    public function healthteam()
    {
        return $this->belongsTo(HealthTeam::class);
    }
}
