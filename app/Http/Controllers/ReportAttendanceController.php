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
        $laporan = ReportAttendance::all();
        $dosen = Dosen::all();
        $matkul = Matkul::all();
        $prodi = Prodi::all();
        return view('report.index', compact('laporan', 'dosen', 'matkul', 'prodi'));
    }

    public function create()
    {
        $laporan = ReportAttendance::all();
        $dosen = Dosen::all();
        $matkul = Matkul::all();
        $prodi = Prodi::all();
        return view('report.create', compact('laporan', 'dosen', 'matkul', 'prodi'));
    }

    public function store(Request $request)
    {
        ReportAttendance::create($request->all());
        $saveState = "Report Berhasil ditambahkan!";
        return redirect('report')->with('doneSave', $saveState);
    }

    public function show(ReportAttendance $laporan){}

    public function edit($id)
    {
        $laporan = ReportAttendance::find($id);
        $dosen = Dosen::all();
        $matkul = Matkul::all();
        $prodi = Prodi::all();
        return view('report.edit', compact('laporan', 'dosen', 'matkul', 'prodi'));
    }

    public function update(Request $request, $id)
    {
        $laporan = ReportAttendance::find($id);
        $laporan->PRODI     = $request->PRODI;
        $laporan->SEMESTER  = $request->SEMESTER;
        $laporan->PERTEMUAN = $request->PERTEMUAN;
        $laporan->TGL       = $request->TGL;
        $laporan->JAM       = $request->JAM;
        $laporan->MATKUL    = $request->MATKUL;
        $laporan->DOSEN     = $request->DOSEN;
        $laporan->PEMBAHASAN  = $request->PEMBAHASAN;
        $laporan->save();
        $editState = "Report Berhasil Diedit!";
        return redirect('report')->with('doneEdit', $editState);
    }

    public function destroy(Request $request, $id)
    {
        $laporan = ReportAttendance::find($id);
        $laporan->delete();
        $deleteState = "Report Berhasil dihapus!";
        return redirect('report')->with('doneDelete', $deleteState);
    }
}
