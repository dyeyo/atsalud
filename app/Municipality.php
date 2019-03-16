<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $table= 'municipalities';
    protected $fillable=['name','departament_id'];
    public $timestamps = true;

    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function afiliatesInformation()
    {
        return $this->hasMany(AfiliateInformation::class);
    }
    public function referencesPatient()
    {
        return $this->hasMany(PatientReference::class);
    }
    public function employers()
    {
        return $this->hasMany(Employer::class);
    }
}
