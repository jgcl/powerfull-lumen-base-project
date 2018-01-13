<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpDebugController extends Controller
{
    /**
     * Health Check
     *
     * @return mixed
     *
     * @SWG\Get(
     *     path="/health",
     *     description="Health Check, return simple 'ok'",
     *     operationId="test",
     *     produces={"application/json"},
     *     tags={"debug"},
     *     @SWG\Response(response=200, description="Health Data")
     * )
     */
    public function health(Request $request)
    {
        $response = "ok";
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }
}



