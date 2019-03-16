<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    protected $table = 'risks';
    protected $fillable = ['risk_type','risk_capture_id'];
    public $timestamps = true;

    public function riskCapture()
    {
        return $this->belongsTo(RiskCapture::class);
    }
    public function risksData()
    {
        return $this->hasMany(RiskData::class);
    }
    public function selectablesRisk ()
    {
        return $this->hasMany(SelectableRisk::class);
    }
}
