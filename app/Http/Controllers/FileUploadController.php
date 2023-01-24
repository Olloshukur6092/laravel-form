<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function uploadPage()
    {
        return view("fileupload");
    }

    public function uploadFile()
    {
        return "salom";
    }
}
