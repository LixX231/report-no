<?php

use App\Http\Controllers\ReportController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use PHPStan\PhpDocParser\Ast\PhpDoc\ReturnTagValueNode;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reports', [ReportController::class, 'index'])->name('report.index');
Route::get('/reports/create', function (){
    return view('report.create');
})->name('reports.create');