<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{

    public function index()
    {
        $datas = Guru::all();
        return view('Guru.index', compact('datas'));
    }


    public function create()
    {
        return view('Guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:gurus,nip',
            'nama_guru' => 'required|string|max:255',
        ]);
        Guru::create([
            'nip' => $request->input('nip'),
            'nama_guru' => $request->input('nama_guru'),
        ]);
    return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('Guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required|unique:gurus,nip,' . $id,
            'nama_guru' => 'required|string|max:255',
        ]);
        $guru = Guru::findOrFail($id);
        $guru->update([
            'nip' => $request->input('nip'),
            'nama_guru' => $request->input('nama_guru'),
        ]);
    return redirect()->route('guru.index')->with('success', 'Guru berhasil diupdate!');
    }

    public function destroy($id)
    {
    $guru = Guru::findOrFail($id);
    $guru->delete();
    return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus!');
    }
}
        $gurus = Guru::all();

