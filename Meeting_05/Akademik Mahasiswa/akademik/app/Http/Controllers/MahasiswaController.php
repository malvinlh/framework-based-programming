<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'nrp' => 'required|numeric',
            'nama' => 'required', 
            'alamat' => 'required',
            'jurusan' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required',
            'password' => 'required',
        ]);
        $data['password'] = bcrypt($data['password']);
        Mahasiswa::create($data);
        return redirect(route('mahasiswa.index'))->with('success','Berhasil Menambahkan Data Mahasiswa');
    }

    public function edit(Mahasiswa $mahasiswa){
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa){
        $data = $request->validate([
            'nama' => 'required', 
            'alamat' => 'required',
            'jurusan' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required',
            'password' => 'required',
        ]);
        $data['password'] = bcrypt($data['password']);
        $mahasiswa->update($data);
        return redirect(route('mahasiswa.index'))->with('success','Berhasil Memperbarui Data Mahasiswa');
    }

    public function delete(Mahasiswa $mahasiswa){
        $mahasiswa->delete();
        return redirect(route('mahasiswa.index'))->with('success','Berhasil Menghapus Data Mahasiswa');
    }
}
