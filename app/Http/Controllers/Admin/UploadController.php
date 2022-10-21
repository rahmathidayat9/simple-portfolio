<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public static function uploadSingleImage($storagePath)
    {
        if (request()->hasFile('file')) {
            $filename = request()->file->getClientOriginalName();
            request()->file->storeAs('public/uploads/'.$storagePath,$filename);

            return $filename;
        }
    }
}
