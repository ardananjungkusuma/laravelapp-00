<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();

        //mengirim data mahasiswa ke view index
        return view('index', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        //memanggil view tambah
        return view('tambah');
    }

    public function simpan(Request $request)
    {
        // insert data ke table mahasiswa
        DB::table('mahasiswa')->insert([
            'nama' => $request->namamhs,
            'nim' => $request->nimmhs,
            'email' => $request->emailmhs,
            'jurusan' => $request->jurusanmhs
        ]);
        return redirect('/');
    }

    public function update(Request $request)
    {
        // update data mahasiswa
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nama' => $request->namamhs,
            'nim' => $request->nimmhs,
            'email' => $request->emailmhs,
            'jurusan' => $request->jurusanmhs
        ]);
        return redirect('/');
    }

    public function detail($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();

        return view('detail', ['mahasiswa' => $mahasiswa]);
    }

    public function edit($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();

        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function hapus($id)
    {
        // hapus data mahasiswa by id
        DB::table('mahasiswa')->where('id', $id)->delete();

        return redirect('/');
    }
}
