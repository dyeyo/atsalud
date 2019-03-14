<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class afialtes_information_parafiscal extends Model
{
    protected $fillable=['applicant_information_id', 'parafiscal_id'];

    public function parafiscal(){
        return $this->belongsToMany('\App\Parafiscals');
    }

    public function applicant_information(){
        return $this->belongsToMany('\App\Afiliates_information');
    }
}
