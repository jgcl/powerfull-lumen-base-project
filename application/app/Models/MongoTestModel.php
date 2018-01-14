<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as MongoEloquent;


class MongoTestModel extends MongoEloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'tests';
    protected $fillable = ['name', 'nasc'];
    protected $dates = ['nasc', 'created_at', 'updated_at'];
    public $timestamps = true;
}
