<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'tables';
    public function worker()
    {
        return $this->belongsTo('Worker');
    }
    public function room()
    {
        return $this->belongsTo('Room');
    }
}
