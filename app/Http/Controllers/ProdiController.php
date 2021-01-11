<?php

namespace App\Http\Controllers;

use App\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        Prodi::create($request->all());
        $saveState = "Prodi " .$request->NAMA. "Berhasil ditambahkan!";
        return redirect('prodi')->with('doneSave');
    }

    public function show(Prodi $prodi){}

    public function edit($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, $id)
    {
        $prodi = prodi::find($id);
        $prodi->NAMA  = $request->NAMA;
        $prodi->save();
        $editState = "Prodi " .$request->NAMA. " Berhasil Diedit!";
        return redirect('prodi')->with('doneEdit', $editState);
    }

    public function destroy(Request $request, $id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete();
        $deleteState = "Prodi " .$request->NAMA. "Berhasil dihapus!";
        return redirect('prodi')->with('doneDelete', $deleteState);
    }
}
