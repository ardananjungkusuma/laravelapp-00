@extends('master')

@section('title','Tambah Data')

@section('judul_halaman','Tambah Data Mahasiswa')

@section('konten')
<a href="/" class="btn btn-danger">Kembali</a>
<br>
<br>
@if (count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/mahasiswa/simpan" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control"  name="namamhs" value="{{old('namamhs')}}"><br>
    </div>
    <div class="form-group">
        <label>NIM</label>
        <input type="number" class="form-control"  name="nimmhs" value="{{old('nimmhs')}}"><br>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control"  name="emailmhs" value="{{old('emailmhs')}}"><br>
    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <input type="text" class="form-control"  name="jurusanmhs" value="{{old('jurusanmhs')}}"><br>
    </div>
    <input type="submit" class="btn btn-primary float-right" value="Simpan Data">
</form>
@endsection
