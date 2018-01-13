<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MysqlTestModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'tests';
    protected $fillable = ['name', 'nasc'];
    protected $dates = ['nasc', 'created_at', 'updated_at'];
    public $timestamps = true;
}
