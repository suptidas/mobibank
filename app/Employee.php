<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='emp';
    protected $primarykey='id';
    public $timestamps= false;
}
