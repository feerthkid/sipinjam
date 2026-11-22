@extends('layouts.app')

@section('judul', 'Tambah Film')

@section('konten')
@include('partials.pesan')

<form method="POST" action="{{ route('film.store') }}">
@csrf
<p>Kode: <input name="kode" value="{{ old('kode') }}"></p>
<p>Judul: <input name="judul" value="{{ old('judul') }}"></p>
<p>Genre: <input name="genre" value="{{ old('genre') }}"></p>
<p>Tahun: <input name="tahun" type="number" value="{{ old('tahun') }}"></p>
<button type="submit">Simpan</button>
</form>
@endsection