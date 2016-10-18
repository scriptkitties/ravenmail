<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'name';
    public $incrementing = false;
    public $timestamps = false;
}
