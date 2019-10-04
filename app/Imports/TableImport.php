<?php

namespace App\Imports;

use App\Table;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class TableImport implements ToModel
{
	use Importable;
    public function model(array $row)
    {
        return Table([
        	// 
        ]);
    }
}