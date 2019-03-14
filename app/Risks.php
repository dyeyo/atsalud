<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Risks extends Model
{
    protected $fillable=['risk_type', 'risk_capture_id'];

    public function risk_capture()
    {
        return $this->belongsTo('App\Risk_capture');
    }

    public function selectable_risks()
    {
        return $this->hasMany('App\Selectable_risks');

    }
}
