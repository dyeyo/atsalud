<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiskCapture extends Model
{
    protected $table = 'risk_capture';
    protected $fillable = ['user_id','afiliate_information_id'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function afiliateInformation()
    {
        return $this->belongsTo(AfiliateInformation::class);
    }
    public function risks()
    {
        return $this->hasMany(Risk::class);
    }
}
