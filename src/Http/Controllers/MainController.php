<?php

namespace Unikat\AllImport\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{

    public function index()
    {
        $files = Storage::files('/app/all-import');
        
        return view('all-import::index', compact('files'));
    }
}