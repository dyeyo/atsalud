<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selectable extends Model
{
   protected $fillable=['content','type', 'affiliation_id'];

    public function affiliation(){
        return $this->belongsToMany('\App\Affiliations');
    }
}
