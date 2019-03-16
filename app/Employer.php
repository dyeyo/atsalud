<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table = 'employers';
    protected $fillable = ['business_name','doc_type','doc_number','contributing_type','address','landline','phone_mobile','municipality_id','affiliation_id'];
    public $timestamps = true;

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
    public function affiliation()
    {
        return $this->belongsTo(Affiliation::class);
    }
}
