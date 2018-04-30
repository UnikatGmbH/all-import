<?php

namespace Unikat\AllImport\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    
    public function upload(Request $request)
    {
        if($request->hasFile('file')) {
            $fileParts     = explode('.', $request->file->getClientOriginalName());
            $fileExtension = strtolower($request->file->getClientOriginalExtension());
    
            if (count($fileParts) <= 2) {
                $fileName = strtolower($fileParts[0]);
            } else {
                array_pop($fileParts);
                $fileName = implode('.', $fileParts);
            }
    
            $now = Carbon::now()->format('Ymdhis');
    
            $file = $fileName . '_' . $now . '.' . $fileExtension;
    
            $request->file->storeAs('all-import', $file, 'local');
    
            return $file;
        }
    }
}