<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiskData extends Model
{
    protected $table = 'risk_data';
    protected $fillable = ['type','value','risk_id'];
    public $timestamps = true;
    public function risk()
    {
        return $this->belongsTo(Risk::class);
    }
}
