<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parafiscals extends Model
{
    protected $fillable=['legal_representative','business_name', 'tradename', 'nit',
        'address', 'email', 'phone', 'image', 'type'];

}
