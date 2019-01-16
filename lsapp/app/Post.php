<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';

    //primary key
    public $primaryKey = 'id';

    //Worker name
    public $name = 'worker_name';


}
