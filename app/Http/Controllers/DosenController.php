<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        Dosen::create($request->all());
        $saveState = "Dosen " .$request->NAMA. "Berhasil ditambahkan!";
        return redirect('dosen')->with('doneSave');
    }

    public function show(Dosen $dosen){}

    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id);
        $dosen->NIP   = $request->NIP;
        $dosen->NAMA  = $request->NAMA;
        $dosen->save();
        $editState = "Dosen " .$request->NAMA. " Berhasil Diedit!";
        return redirect('dosen')->with('doneEdit', $editState);
    }

    public function destroy(Request $request, $id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        $deleteState = "Dosen " .$request->NAMA. "Berhasil dihapus!";
        return redirect('dosen')->with('doneDelete', $deleteState);
    }
}
