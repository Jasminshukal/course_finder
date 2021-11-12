<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CoursesExport;
use App\Imports\CoursesImport;
use Maatwebsite\Excel\Facades\Excel;

class BulkData extends Controller
{
    public function importExportView()
    {
       return view('import');
    }

    public function export()
    {
        return Excel::download(new CoursesExport, 'CoursesExport.xlsx');
    }

    public function import()
    {
        Excel::import(new CoursesImport,request()->file('file'));

        return back();
    }

}
