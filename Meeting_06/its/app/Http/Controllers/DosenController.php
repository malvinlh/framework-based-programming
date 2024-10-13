<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $dosen = Dosen::all();
    return view('dosen.index', compact('dosen'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required',
        'email' => 'required|email|unique:dosen,email',
    ]);

    Dosen::create($validated);

    return redirect()->route('dosen.index');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $dosen = Dosen::find($id);
    return view('dosen.edit', compact('dosen'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nama' => 'required',
        'email' => 'required|email|unique:dosen,email,' . $id,
    ]);

    Dosen::find($id)->update($validated);

    return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diupdate.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Dosen::find($id)->delete();
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus.');
    }
    
}
