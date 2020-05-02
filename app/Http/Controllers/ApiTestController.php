<?php

namespace App\Http\Controllers;

use App\ApiTest;
use JWTAuth;
use Illuminate\Http\Request;

class ApiTestController extends Controller
{


    public function postTest(Request $request)
    {
        $user = JWTAuth::parseToken()->toUser();
        $apiTest = new ApiTest();
        $apiTest->name = $request->input('name');
        $apiTest->save();
        return response()->json(['apiTest' => $apiTest, 'user' => $user], 201);

    }

    public function getTest()
    {
        $apiTest = ApiTest::all();
        return response()->json(['apiTest' => $apiTest], 200);

    }

    public function putTest(Request $request, $id)
    {
        $apiTest = ApiTest::find($id);
        if(!$apiTest) {
            return response()->json(['message' => 'Document not found!'], 404);
        }
        $apiTest->name = $request->input('name');
        $apiTest->save();
        return response()->json(['apiTest' => $apiTest], 200);
    }

    public function deleteTest($id)
    {
        $apiTest = ApiTest::find($id);
        $apiTest->delete();
        return response()->json(['message' => 'Test deleted' ], 200);
    }
}
