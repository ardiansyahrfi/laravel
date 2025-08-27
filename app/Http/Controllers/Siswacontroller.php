<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Siswa;

class Siswacontroller extends Controller
{
    // Tampilkan daftar siswa
    public function index()
    {
    $siswa = Siswa::all();
    return view('Siswa.index', compact('siswa'));
    }

    // Tampilkan form tambah siswa
    public function create()
    {
    return view('Siswa.create');
    }

    // Simpan data siswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswas,nis',
            'nama_siswa' => 'required',
        ]);
        Siswa::create([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
        ]);
    return redirect()->route('siswas.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    // Tampilkan form edit siswa
    public function edit($id)
    {
    $siswa = Siswa::findOrFail($id);
    return view('Siswa.edit', compact('siswa'));
    }

    // Update data siswa
    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|unique:siswas,nis,' . $id,
            'nama_siswa' => 'required',
        ]);
        $siswa = Siswa::findOrFail($id);
        $siswa->update([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
        ]);
    return redirect()->route('siswas.index')->with('success', 'Data siswa berhasil diupdate');
    }

    // Hapus data siswa
    public function destroy($id)
    {
    $siswa = Siswa::findOrFail($id);
    $siswa->delete();
    return redirect()->route('siswas.index')->with('success', 'Data siswa berhasil dihapus');
    }
}
