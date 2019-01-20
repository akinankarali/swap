<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    public function table()
    {
        return $this->hasMany('Table');
    }
    public function worker()
    {
        return $this->hasMany('Worker');
    }
}
