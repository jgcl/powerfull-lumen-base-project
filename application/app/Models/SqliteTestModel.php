<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SqliteTestModel extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'tests';
    protected $fillable = ['name', 'nasc'];
    protected $dates = ['nasc', 'created_at', 'updated_at'];
    public $timestamps = true;
}
