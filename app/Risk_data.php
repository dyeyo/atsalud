<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Risk_data extends Model
{
    protected $fillable=['type', 'value', 'risk_id'];

    public function risk()
    {
        return $this->belongsTo('App\Risks');

    }
}
