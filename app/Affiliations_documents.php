<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliations_documents extends Model
{
    protected $fillable=['document_route', 'type', 'affiliations_id'];

    public function affiliation()
    {
        return $this->belongsTo('App\Affiliations');
    }
}
