<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnexeReference extends Model
{
    protected $table = 'annexes_reference';
    protected $fillable = ['attached_route','type','patient_reference_id'];
    public $timestamps = true;

    public function Patientsreference ()
    {
        return $this->belongsTo(PatientReference::class);
    }
}
