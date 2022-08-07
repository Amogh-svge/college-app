<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class dummyApiController extends Controller
{

    public function index($id = null)
    {
        //
    }


    public function store()
    {
        $validated = Validator::make(request()->all(), [
            'title' => 'required|min:8',
            'short_descript' => 'required',
            'descript' => 'required',
            "cat_id" => 'required',
            "vidtype_id" => 'required',
            "user_id" => 'required',
            "video" => 'required',
        ]);

        if ($validated->fails()) {
            return response()->json($validated->errors(), 400);
        } else {
            Video::create(request()->all());
            return response()->json(['message' => 'successfully created']);

            // $name = uniqid() . Date('yd') . $request->file('image')->getClientOriginalName();
            // // $data = collect([$request->except('image'), ["image" => $name, "users_id" => Auth::id()]]);
            // // $inputData = $data->collapse();
            // // request()->file('image')->storeAs('public/images', $name);
            // // image_crop($name, $request->category_id);
            // // // throws json errors message
        }
    }


    public function show($id)
    {
        //
    }

    public function update(Video $video)
    {

        $validated = Validator::make(request()->all(), [
            'title' => 'required|min:8',
            'short_descript' => 'required',
            'descript' => 'required',
            "cat_id" => 'required',
            "vidtype_id" => 'required',
            "user_id" => 'required',
            "video" => 'required',
        ]);

        if ($validated->fails())
            return response()->json($validated->errors(), 400); // throws json errors message
        else
            $video->update(request()->all());
        return response()->json(['message' => 'successfully updated']);
    }


    public function destroy(Video $video)
    {
        $video =  $video->delete();
        return $video ? 'success' :  'failed';
    }
}
