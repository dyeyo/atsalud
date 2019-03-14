<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $fillable=['name'];

    public function municipalitie()
    {
        return $this->hasMany('App\Municipalitie');
    }

    public function parafiscal()
    {
        return $this->hasMany('App\Paratiscals');
    }

    public function family_nucleus()
    {
        return $this->hasMany('App\Family_nucleus');
    }
}
