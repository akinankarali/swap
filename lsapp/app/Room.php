<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //Table Name
    protected $table = 'rooms';

    //primary key
    public $primaryKey = 'id';

    //Worker name
    public $name = 'room_name';

    //Room_Number
    public $room_id = 'room_id';
}
