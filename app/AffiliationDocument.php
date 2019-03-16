<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliationDocument extends Model
{
    protected $table = 'affiliations_documents';
    protected $fillable = ['document_route', 'type', 'affiliation_id'];
    public $timestamps = true;

    public function affiliation()
    {
        return $this->belongsTo(Affiliation::class);
    }

}
