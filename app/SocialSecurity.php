<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialSecurity extends Model
{
    protected $table = 'social_security';
    protected $fillable = ['business_name','tradename','nit','address','email','phone','image','type'];
    public $timestamps = true;

    public function users ()
    {
        return $this->belongsToMany(User::class);
    }
    public function afiliatesInformation()
    {
        return $this->belongsToMany(AfiliateInformation::class);
    }
}
