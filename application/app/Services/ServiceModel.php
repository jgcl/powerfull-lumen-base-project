<?php

namespace App\Services;

use App\Models\MongoTestModel;
use App\Models\MysqlTestModel;
use App\Models\OracleTestModel;
use App\Models\PostgresTestModel;
use App\Models\SqliteTestModel;
use App\Models\SqlserverTestModel;
use Illuminate\Http\Request;

class ServiceModel
{
    public function getModel(Request $request)
    {
        $database = $request->input('database');

        $model = null;

        switch ($database) {
            case 'mysql': $model = new MysqlTestModel(); break;
            case 'sqlsrv': $model = new SqlserverTestModel(); break;
            case 'oracle': $model = new OracleTestModel(); break;
            case 'pgsql': $model = new PostgresTestModel(); break;
            case 'sqlite': $model = new SqliteTestModel(); break;
            case 'mongo': $model = new MongoTestModel(); break;
        }

        return $model;
    }
}