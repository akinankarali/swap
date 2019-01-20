<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = 'workers';
    public function table()
    {
        return $this->hasOne('Table');
    }
    public function room()
    {
        return $this->hasOne('Room');
    }
}
