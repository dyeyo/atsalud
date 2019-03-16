<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostService extends Model
{
    protected $table = 'cost_services';
    protected $fillable = ['name','value'];
    public $timestamps = true;
}
