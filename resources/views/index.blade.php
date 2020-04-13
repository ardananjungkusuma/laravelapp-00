@extends('master')

@section('title','Home')

@section('judul_halaman','Data Mahasiswa')

@section('konten')
<a href="/mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
<br><br>
<table class="table">
    <thead class="thead-dark">
        <th>Nama</th>
        <th>NIM</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>
                <a href="/mahasiswa/detail/{{ $mhs->id }}" class="badge badge-info">Detail</a>
                <a href="/mahasiswa/edit/{{ $mhs->id }}" class="badge badge-warning">Edit</a>
                <a href="/mahasiswa/hapus/{{ $mhs->id }}" class="badge badge-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection