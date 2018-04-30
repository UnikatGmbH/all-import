<?php

namespace Unikat\AllImport\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use League\Csv\Statement;

class FileController extends Controller
{
    
    public function selectTable(Request $request)
    {
        $file = $request->file;
        $dbName = DB::getDatabaseName();
        foreach(DB::select('SHOW TABLES') as $table) {
            $property = 'Tables_in_' . $dbName;
            $tables[] = $table->$property;
        }
        
        return view('all-import::select-table', compact('tables', 'file'));
    }
    
    public function index(Request $request, $fileName)
    {
        $path = storage_path('app/all-import/' . $fileName);
        $csv  = Reader::createFromPath($path);
        $csv->setHeaderOffset(0);
        
        $stmt    = (new Statement())->offset(0)->limit(1);
        $records = $stmt->process($csv);
        
        $fields       = $records->getHeader();
        $remoteFields = DB::getSchemaBuilder()->getcolumnListing($request->table);
        
        return view('all-import::file', compact('fields', 'remoteFields', 'path'));
    }
    
    public function insert(Request $request)
    {
        $csv = Reader::createFromPath($request->path);
        $input = $request->except('path');
        $csv->setHeaderOffset(0);
        
        $stmt = (new Statement())->offset(0);
        $records = $stmt->process($csv);
        
        $inserts = [];
        
        foreach($records as $record) {
            foreach($input as $key => $value) {
                if(!is_null($value)) {
                    $temp[$key] = $record[$value];
                }
            }
            
            $inserts[] = $temp;
        }
        
        DB::table('companies')->insert($inserts);
        
        return redirect()->route('all-import.index');
    }
}