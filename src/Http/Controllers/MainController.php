<?php

namespace Unikat\AllImport\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $files = array_map(function ($file) {
            return explode('/', $file)[1];
        }, Storage::files('/all-import'));
        
        return view('all-import::index', compact('files'));
    }
}