<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Barryvdh\DomPDF\Facade as PDF;

class HistoryTypeReportController extends Controller
{
    public function print(Request $request)
    {
        $type = $request->input('type');
        $data = \App\Models\history::where('type', $type)->get();
    
        $pdf = \PDF::loadView('Laporan.report2', compact('data', 'type'));
        return $pdf->download('laporan-'.$type.'.pdf');
    }
}
