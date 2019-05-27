<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table='emails';
    protected $fillable=['name_send', 'email_send'];
}
