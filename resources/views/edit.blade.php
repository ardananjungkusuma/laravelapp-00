@extends('master')

@section('title','Edit Data')

@section('judul_halaman','Edit Data Mahasiswa')

@section('konten')
<a href="/" class="btn btn-danger">Kembali</a>
<br>
<br>
<form action="/mahasiswa/update" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $mahasiswa->id }}">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" value="{{ $mahasiswa->nama }}" required="required" name="namamhs"><br>
    </div>
    <div class="form-group">
        <label>NIM</label>
        <input type="number" class="form-control" value="{{ $mahasiswa->nim }}" required="required" name="nimmhs"><br>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" value="{{ $mahasiswa->email }}" required="required" name="emailmhs"><br>
    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <input type="text" class="form-control" value="{{ $mahasiswa->jurusan }}" required="required" name="jurusanmhs"><br>
    </div>
    <input type="submit" class="btn btn-primary float-right" value="Update Data">
</form>
@endsection