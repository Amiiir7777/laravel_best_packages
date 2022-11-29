<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Imports\UserImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export()
    {
        return Excel::download(new UserExport(), 'My_System_Users.xlsx');
    }

    public function import()
    {
        return Excel::import(new UserImport(), storage_path('testExcel.xlsx'));
    }
}
