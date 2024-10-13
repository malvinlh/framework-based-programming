<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('dosen')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        return view('mahasiswa.create', compact('dosen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'dosen_id' => 'required|exists:dosen,id',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $dosen = Dosen::all(); 
        return view('mahasiswa.edit', compact('mahasiswa', 'dosen'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'dosen_id' => 'required|exists:dosen,id', 
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus');
    }
}