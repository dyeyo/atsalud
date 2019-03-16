<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportNovelty extends Model
{
    protected $table = 'report_novelty';
    protected $fillable = ['date','type','afiliate_information_id','affiliation_id'];
    public $timestamps = true;

    public function afiliateInformation()
    {
        return $this->belongsTo(AfiliateInformation::class);
    }

    public function affiliation()
    {
        return $this->belongsTo(Affiliation::class);
    }
}
