<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryReportController;
use App\Http\Controllers\HistoryTypeReportController;

Route::get('history/type-report', [HistoryTypeReportController::class, 'print'])->name('historyType.print');

Route::get('/history/print', [HistoryReportController::class, 'print'])->name('history.print');


Route::get('/', function () {
    return view('welcome');
});
