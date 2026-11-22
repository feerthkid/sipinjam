@extends('layouts.app')

@section('judul', 'Ubah Film')

@section('konten')
@include('partials.pesan')

<form method="POST" action="{{ route('film.update', $film) }}">
@csrf
@method('PUT')
<p>Kode: <input name="kode" value="{{ old('kode', $film->kode) }}"></p>
<p>Judul: <input name="judul" value="{{ old('judul', $film->judul) }}"></p>
<p>Genre: <input name="genre" value="{{ old('genre', $film->genre) }}"></p>
<p>Tahun: <input name="tahun" type="number" value="{{ old('tahun', $film->tahun) }}"></p>
<button type="submit">Perbarui</button>
</form>
@endsection