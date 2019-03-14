<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_novelty extends Model
{
    protected $fillable=['date', 'type', 'afiliate_information_id', 'affiliation_id'];

    public function afiliate_information()
    {
        return $this->belongsTo('App\Afiliates_information');
    }

    public function affiliation()
    {
        return $this->belongsTo('App\Affiliations');
    }
}
