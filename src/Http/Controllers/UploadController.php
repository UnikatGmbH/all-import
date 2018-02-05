<?php

namespace Unikat\AllImport\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    
    public function upload(Request $request)
    {
        $fileName = $request->file->getClientOriginalName();
    
        if(Storage::exists('all-import/' . $request->file->getClientOriginalName())) {
            $fileName = '2_' . $fileName; // TODO: es muss für jede vorhandene Datei mit gleichen Namen hochgezählt werden
        }
    
        return $request->file->storeAs('all-import', $fileName, 'local');
        
    }
}