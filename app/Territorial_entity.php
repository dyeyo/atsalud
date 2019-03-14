<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Territorial_entity extends Model
{
   protected $fillable=['territorial_identification','number_card', 'sisben', 'level', 'date_filiation',
       'validation_date', 'observations', 'affiliation_id'];

    public function affiliations()
    {
        return $this->belongsTo('App\Affiliations');
    }
}
