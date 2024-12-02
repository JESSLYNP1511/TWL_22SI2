<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Barryvdh\DomPDF\Facade as PDF;

class HistoryReportController extends Controller
{
    public function print(Request $request)
    {
        $bulan = $request->input('bulan');
        $data = \App\Models\history::where('bulan', $bulan)->get();
    
        $pdf = \PDF::loadView('Laporan.report', compact('data', 'bulan'));
        return $pdf->download('laporan-'.$bulan.'.pdf');
    }

}
