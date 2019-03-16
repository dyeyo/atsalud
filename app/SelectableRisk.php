<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectableRisk extends Model
{
    protected $table = 'selectable_risks';
    protected $fillable = ['type','value','	risk_id'];
    public $timestamps = true;
    public function risk()
    {
        return $this->belongsTo(Risk::class);
    }
}
