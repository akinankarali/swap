<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    //Table Name
    protected $table = 'tables';

    //primary key
    public $primaryKey = 'id';

    //Worker name
    public $name = 'table_name';

    //Room_Number
    public $room_id = 'room_id';
}
