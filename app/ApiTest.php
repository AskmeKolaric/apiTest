<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiTest extends Model
{
    protected $table = 'apiTest';
    protected $fillable = ['name'];
}
