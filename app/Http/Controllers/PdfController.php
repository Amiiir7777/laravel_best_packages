<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
        return view('pdf.index');
    }

    public function export()
    {
        $users = User::query()->latest()->limit(2)->get();
        $pdf = Pdf::loadView('pdf.export', compact('users'));
        return $pdf->download('users.pdf');
    }
}
