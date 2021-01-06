<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
    'name', 'email', 'password', 'google_id'
];}