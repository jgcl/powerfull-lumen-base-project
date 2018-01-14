<?php

namespace App\Http\Controllers;

use App\Services\ServiceModel;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    /**
     * Select Example
     *
     * @return mixed
     * @throws \Exception
     *
     * @SWG\Get(
     *     path="/select",
     *     description="Select Example",
     *     operationId="select",
     *     produces={"application/json"},
     *     tags={"database"},
     *
     *     @SWG\Parameter(in="query", name="database", description="database", required=true, type="string", enum={"mysql", "sqlsrv", "oracle", "pgsql", "sqlite", "mongo"}),
     *
     *     @SWG\Response(response=200, description="Json Content Data"),
     *     @SWG\Response(response=422, description="Validation Error"),
     *     @SWG\Response(response=500, description="Internal Server Error")
     * )
     */
    public function select(Request $request, ServiceModel $serviceModel)
    {
        // simple validation
        $this->validate($request, [
            'database' => 'required|string|in:mysql,sqlsrv,oracle,pgsql,sqlite,mongo'
        ]);

        $model = $serviceModel->getModel($request);

        $response = $model->all();

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Select Example
     *
     * @return mixed
     *
     * @SWG\Post(
     *     path="/insert",
     *     description="Simple insert example",
     *     operationId="select",
     *     produces={"application/json"},
     *     tags={"database"},
     *
     *     @SWG\Parameter(in="query", name="database", description="database", required=true, type="string", enum={"mysql", "sqlsrv", "oracle", "pgsql", "sqlite", "mongo"}),
     *     @SWG\Parameter(in="query", name="name", description="name", required=true, type="string"),
     *     @SWG\Parameter(in="query", name="nasc", description="date of birth in YYYY-MM-DD", required=true, type="string"),
     *
     *     @SWG\Response(response=200, description="Json Content Data"),
     *     @SWG\Response(response=422, description="Validation Error"),
     *     @SWG\Response(response=500, description="Internal Server Error")
     * )
     */
    public function insert(Request $request, ServiceModel $serviceModel)
    {
        // simple validation
        $this->validate($request, [
            'database' => 'required|string|in:mysql,sqlsrv,oracle,pgsql,sqlite,mongo',
            'name' => 'required|string|min:1|max:100',
            'nasc' => 'required|date_format:Y-m-d',
        ]);

        $model = $serviceModel->getModel($request);

        $response = $model->create($request->only(['name', 'nasc']));

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Update Example
     *
     * @return mixed
     *
     * @SWG\Put(
     *     path="/update",
     *     description="Simple Update Example",
     *     operationId="update",
     *     produces={"application/json"},
     *     tags={"database"},
     *
     *     @SWG\Parameter(in="query", name="database", description="database", required=true, type="string", enum={"mysql", "sqlsrv", "oracle", "pgsql", "sqlite", "mongo"}),
     *     @SWG\Parameter(in="query", name="id", description="register id", required=true, type="string"),
     *     @SWG\Parameter(in="query", name="name", description="name", required=true, type="string"),
     *     @SWG\Parameter(in="query", name="nasc", description="date of birth in YYYY-MM-DD", required=true, type="string"),
     *
     *     @SWG\Response(response=200, description="Json Content Data"),
     *     @SWG\Response(response=422, description="Validation Error"),
     *     @SWG\Response(response=500, description="Internal Server Error")
     * )
     */
    public function update(Request $request, ServiceModel $serviceModel)
    {
        // simple validation
        $this->validate($request, [
            'database' => 'required|string|in:mysql,sqlsrv,oracle,pgsql,sqlite,mongo',
            'id' => 'required|string|exists:tests,id',
            'name' => 'required|string|min:1|max:100',
            'nasc' => 'required|date_format:Y-m-d',
        ]);

        $model = $serviceModel->getModel($request);
        $model = $model->findOrFail($request->input('id'));
        $model->fill($request->only(['name','nasc']))->save();

        return response()->json($model, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Delete Example
     *
     * @return mixed
     *
     * @SWG\Delete(
     *     path="/delete",
     *     description="Simple Delete Example",
     *     operationId="update",
     *     produces={"application/json"},
     *     tags={"database"},
     *
     *     @SWG\Parameter(in="query", name="database", description="database", required=true, type="string", enum={"mysql", "sqlsrv", "oracle", "pgsql", "sqlite", "mongo"}),
     *     @SWG\Parameter(in="query", name="id", description="register id", required=true, type="string"),
     *
     *     @SWG\Response(response=200, description="Json Content Data"),
     *     @SWG\Response(response=422, description="Validation Error"),
     *     @SWG\Response(response=500, description="Internal Server Error")
     * )
     */
    public function delete(Request $request, ServiceModel $serviceModel)
    {
        // simple validation
        $this->validate($request, [
            'database' => 'required|string|in:mysql,sqlsrv,oracle,pgsql,sqlite,mongo',
            'id' => 'required|string|exists:tests,id',
        ]);

        $model = $serviceModel->getModel($request);
        $model = $model->findOrFail($request->input('id'))->delete();

        return response()->json($model, 200, [], JSON_PRETTY_PRINT);
    }
}



