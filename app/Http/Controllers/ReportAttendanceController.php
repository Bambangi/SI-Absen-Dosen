<?php

namespace App\Http\Controllers;

use App\ReportAttendance;
use App\Dosen;
use App\Matkul;
use App\Prodi;
use Illuminate\Http\Request;

class ReportAttendanceController extends Controller
{
    public function index()
    {
        $report = ReportAttendance::all();
        $dosen = Dosen::all();
        $matkul = Matkul::all();
        $prodi = Prodi::all();
        return view('dashboard', compact('report', 'dosen', 'matkul', 'prodi'));
    }

    public function create()
    {
        $report = ReportAttendance::all();
        $dosen = Dosen::all();
        $matkul = Matkul::all();
        $prodi = Prodi::all();
        return view('report.create', compact('report', 'dosen', 'matkul', 'prodi'));
    }

    public function store(Request $request)
    {
        ReportAttendance::create($request->all());
        $saveState = "Report Berhasil ditambahkan!";
        return redirect('report')->with('doneSave');
    }

    public function show(ReportAttendance $report){}

    public function edit($id)
    {
        $report = ReportAttendance::find($id);
        return view('report.edit', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $report = ReportAttendance::find($id);
        $report->PRODI     = $request->PRODI;
        $report->SEMESTER  = $request->SEMESTER;
        $report->TGL       = $request->TGL;
        $report->JAM       = $request->JAM;
        $report->MATKUL    = $request->MATKUL;
        $report->KODE_MK   = $request->KODE_MK;
        $report->DOSEN     = $request->DOSEN;
        $report->PEMBAHASAN  = $request->PEMBAHASAN;
        $report->save();
        $editState = "Report Berhasil Diedit!";
        return redirect('report')->with('doneEdit', $editState);
    }

    public function destroy(Request $request, $id)
    {
        $report = ReportAttendance::find($id);
        $report->delete();
        $deleteState = "Report Berhasil dihapus!";
        return redirect('report')->with('doneDelete', $deleteState);
    }
}
