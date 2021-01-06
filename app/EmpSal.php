<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpSal extends Model
{
    protected $table='empsalary';
    protected $primarykey='id';
    public $timestamps= false;
}
