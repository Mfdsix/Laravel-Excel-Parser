<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\TableImport;
use App\Table;

class ParserController extends Controller
{
    public function parse(Request $request){
    	if($request->has('excel')){
    		$request->validate([
    			'mimes' => ["text/csv", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "application/vnd.ms-excel"]
    		]);

    		$results = (new TableImport)->toArray($request->file('excel'));

    		echo "<pre>";
    		print_r($results);
    		echo "</pre>";
    	}
    }
}
