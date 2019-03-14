<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class health_teams_users extends Model
{

    protected $fillable=['health_team_id','user_id'];

    public function health_team(){
        return $this->belongsToMany('\App\Health_teams');
    }

    public function user(){
        return $this->belongsToMany('\App\User');
    }
}
