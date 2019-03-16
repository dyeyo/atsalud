<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $table= 'departaments';
    protected $fillable=['name'];
    public $timestamps = true;

    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }
}
