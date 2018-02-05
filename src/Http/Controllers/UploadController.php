<?php

namespace Unikat\AllImport\Http;

use Illuminate\Http\Request;
use Unikat\AllImport\Http\Controllers\Controller;

class UploadController extends Controller
{
    
    public function upload(Request $request)
    {
        return $request->file();
    }
}