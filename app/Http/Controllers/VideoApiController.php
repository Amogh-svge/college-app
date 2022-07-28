<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VideoApiController extends Controller
{
    public function index($id = null)
    {
        return $id ? Video::find($id) : Video::all();
    }

    public function create()
    {
        $validated = Validator::make(request()->all(), [
            'title' => 'required',
            'short_descript' => 'required',
            'descript' => 'required',
            "cat_id" => 'required',
            "vidtype_id" => 'required',
            "user_id" => 'required',
            "video" => 'required',
        ]);

        return $validated->fails()
            ? response()->json($validated->errors(), 401) // throws json errors message
            : Video::create(request()->all());
    }

    public function delete(Video $video)
    {
        $video =  $video->delete();
        return $video ? 'success' :  'failed';
    }

    public function update(Video $video)
    {
        $validated = Validator::make(request()->all(), [
            'title' => 'required',
            'short_descript' => 'required',
            'descript' => 'required',
            "cat_id" => 'required',
            "vidtype_id" => 'required',
            "user_id" => 'required',
            "video" => 'required',
        ]);

        return $validated->fails()
            ? response()->json($validated->errors(), 401) // throws json errors message
            : $video->update(request()->all());
    }

    public function search($search)
    {
        $result =  Video::where("title", "like", "%" . $search . "%")->get();
        return count($result) > 0 ? $result : [
            'result' => "No result Found"
        ];
    }
}
