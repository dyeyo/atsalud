<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ips extends Model
{
    protected $table = 'ips';
    protected $fillable = ['business_name','tradename','nit','address','phone','email','municipality_id'];
    public $timestamps = true;

    public function afiliatesInformation()
    {
        return $this->hasMany(AfiliateInformation::class);
    }
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}
