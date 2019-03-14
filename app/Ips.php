<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ips extends Model
{
    protected $fillable=['business_name','nit','address','phone','email','municipality_id'];

    public function municipalitie()
    {
        return $this->belongsTo('App\Municipalitie');
    }

    public function family_nucleus()
    {
        return $this->hasMany('App\Family_nucleus');
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
