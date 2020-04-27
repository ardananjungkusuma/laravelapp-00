<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('index', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'namamhs' => 'required',
            'nimmhs' => 'required|numeric',
            'emailmhs' => 'required|email',
            'jurusanmhs' => 'required'
        ]);

        // insert data ke table mahasiswa
        Mahasiswa::create([
            'nama' => $request->namamhs,
            'nim' => $request->nimmhs,
            'email' => $request->emailmhs,
            'jurusan' => $request->jurusanmhs
        ]);
        return view('simpan', ['data' => $request]);
    }

    public function update(Request $request)
    {
        // update data mahasiswa
        $mahasiswa = Mahasiswa::find($request->id);
        $mahasiswa->nama = $request->namamhs;
        $mahasiswa->nim = $request->nimmhs;
        $mahasiswa->email = $request->emailmhs;
        $mahasiswa->jurusan = $request->jurusanmhs;
        $mahasiswa->save();
        return redirect('/');
    }

    public function detail($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('detail', ['mahasiswa' => $mahasiswa]);
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function hapus($id)
    {
        // hapus data mahasiswa by id
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/');
    }
}
