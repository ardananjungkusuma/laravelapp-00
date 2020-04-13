@extends('master')

@section('title','Tambah Data')

@section('judul_halaman','Tambah Data Mahasiswa')

@section('konten')
<a href="/" class="btn btn-danger">Kembali</a>
<br>
<br>
<form action="/mahasiswa/simpan" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" required="required" name="namamhs"><br>
    </div>
    <div class="form-group">
        <label>NIM</label>
        <input type="number" class="form-control" required="required" name="nimmhs"><br>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" required="required" name="emailmhs"><br>
    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <input type="text" class="form-control" required="required" name="jurusanmhs"><br>
    </div>
    <input type="submit" class="btn btn-primary float-right" value="Simpan Data">
</form>
@endsection