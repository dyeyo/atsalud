<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerritorialEntity extends Model
{
    protected $table = 'territorial_entity';
    protected $fillable = ['territorial_identification','number_card','sisben','level','date_filiation','validation_date','observations','affiliation_id'];
    public $timestamps = true;

    public function affiliation()
    {
        return $this->belongsTo(Affiliation::class);
    }
}
