<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicOrder extends Model
{
    protected $fillable = ['phone','name','comment'];
}
