<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic_history extends Model
{
    protected $fillable=['observations','afiliates_information_id'];

    public function hasMany()
    {
        return $this->belongsTo('App\Afiliates_information');
    }
}
