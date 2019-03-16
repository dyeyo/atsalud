<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selectable extends Model
{
    protected $table = 'selectables';
    protected $fillable = ['content','type','affiliation_id'];
    public $timestamps = true;

    public function affiliation()
    {
        return $this->belongsTo(Affiliation::class);
    }

}
