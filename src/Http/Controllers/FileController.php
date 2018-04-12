<?php

namespace Unikat\AllImport\Http\Controllers;

use Edujugon\XMLMapper\XMLMapper;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    
    public function index($fileName)
    {
        $path = 'all-import/' . $fileName;
        $file = Storage::get($path);
        
        $mapper = new XMLMapper();
        $mapper->loadXML($file);
        
        $structure = [];
        
        foreach($mapper->getObj()->children()->children()->children() as $element) {
            dump($element);
            $structure[] = $element->getAttribute('name');
        }
        
        dump($structure);
        
//        return view('all-import::file', compact('file'));
    }
}