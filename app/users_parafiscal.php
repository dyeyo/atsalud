<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_parafiscal extends Model
{
    protected $fillable=['parafiscal_id','user_id'];

    public function parafiscal(){
        return $this->belongsToMany('\App\Parafiscals');
    }

    public function user(){
        return $this->belongsToMany('\App\User');
    }
}
