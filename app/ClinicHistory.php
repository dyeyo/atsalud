<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClinicHistory extends Model
{
    protected $table = 'clinic_history';
    protected $fillable = ['clinic_history','afiliate_information_id'];
    public $timestamps = true;

    public function afiliateInformation()
    {
        return $this->belongsTo(AfiliateInformation::class);
    }
}
