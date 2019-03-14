<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class annexes_reference extends Model
{
    protected $fillable=['attached_route', 'type', 'reference_patient_id'];

    public function reference_patient()
    {
        return $this->belongsTo('App\Reference_patients');
    }
}
