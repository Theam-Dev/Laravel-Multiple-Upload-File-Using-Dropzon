<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function upload(Request $request){
        $data = $request->file("file")->store('upload');
        return response()->json($data);
    }
}
