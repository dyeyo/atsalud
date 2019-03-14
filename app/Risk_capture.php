<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Risk_capture extends Model
{
    protected $fillable=['user_id','afiliate_information_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function afiliate_information()
    {
        return $this->belongsTo('App\Afiliates_information');
    }




}
