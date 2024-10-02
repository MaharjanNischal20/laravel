<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class UploadController extends Controller
{
    public function upload(Request $request) {
        if ($request->hasFile('file')) {
            // Store the file in the 'public' directory
            $path = $request->file('file')->store('public','public');

//            // Extract the filename from the path
            $fileArrayName = explode('/', $path);
            $fileName = $fileArrayName[1];

            // Return view with the filename
            return view('displayFile', ['path' => $fileName]);
//            return $path;
        } else {
            return "No file uploaded.";
        }
    }

}
