<?php

namespace Unikat\AllImport\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    
    public function upload(Request $request)
    {
        return $request->file->storeAs('all-import', $request->file->getClientOriginalName(), 'local');
        
    }
}