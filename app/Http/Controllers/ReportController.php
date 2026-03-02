<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $reports = Report::all();
        return view('report.index', compact('reports'));
    }
    public function destroy(Report $report){
        $report->delete();
        return redirect()->back();
    }
    public function store(Request $request, Report $report){
        $data = $request -> validate([
            'published' => 'date',
            'car_number' => 'string',
            'description' => 'string',
            'status_report' => 'string',
        ]);

        $report->create($data);
        return redirect()->back();
    }
    public function edit(Report $report){
        return view('report.show', compact('report'));
    }
    public function update(Request $request, Report $report){
        $data = $request -> validate([
            'published' => 'date',
            'car_number' => 'string',
            'description' => 'string',
            'status_report' => 'string',
        ]);

        $report->update($data);
        return redirect()->back();
    }
}
