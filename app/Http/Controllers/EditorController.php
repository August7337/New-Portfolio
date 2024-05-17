<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Image;

class EditorController extends Controller
{
    public function index(){
        return view('editor');
    }

    public function store(Request $request){
        echo $request->input('editor');
    }

    public function upload(Request $request)
    {
        $uploadedImage = $request->file('upload');

        $fileName = $uploadedImage->getClientOriginalName();

        $uploadedImage->move(public_path('uploads/img'), $fileName);

        $url = asset('uploads/img/' . $fileName);

        return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
    }
}
