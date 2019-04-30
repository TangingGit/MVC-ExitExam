<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
    public function employee() { 
        return $this->hasMany('App\Department'); 
    }
}
