<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AllController extends Controller
{

    public function index($id = null)
    {
        return $id ? Video::find($id) : Video::latest()->get();
    }


    public function store(Request $request)
    {
        //
    }



    function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
            'message' => "Records retrived Successfully"
        ];

        return response($response, 201);
    }


    function upload(Request $request)
    {
        $res = $request->file('file')->store('apiFiles');
        $result = [
            "result" => $res,
            "message" => "file successfully uploaded",
        ];
        return $result ?? [
            "result" => "No result",
            "message" => "file upload failed",
        ];
    }

    public function search($search = null)
    {
        $result =  Video::where("title", "like", "%" . $search . "%")->get();

        return count($result) > 0 ? $result : [
            'result' => "No result Found"
        ];
    }
}
