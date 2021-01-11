<?php

namespace App\Http\Controllers;

use App\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $matkul = Matkul::all();
        return view('matkul.index', compact('matkul'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {
        Matkul::create($request->all());
        $saveState = "Matkul " .$request->NAMA. "Berhasil ditambahkan!";
        return redirect('matkul')->with('doneSave', $saveState);
    }

    public function show(Matkul $matkul){}

    public function edit($id)
    {
        $matkul = Matkul::find($id);
        return view('matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $id)
    {
        $matkul = Matkul::find($id);
        $matkul->KODE_MK   = $request->KODE_MK;
        $matkul->NAMA      = $request->NAMA;
        $matkul->save();
        $editState = "Matkul " .$request->NAMA. " Berhasil Diedit!";
        return redirect('matkul')->with('doneEdit', $editState);
    }

    public function destroy(Request $request, $id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete();
        $deleteState = "Matkul " .$request->NAMA. "Berhasil dihapus!";
        return redirect('matkul')->with('doneDelete', $deleteState);
    }
}
