@extends('layouts.app')

@section('judul', 'Detail Film')

@section('konten')
@include('partials.pesan')

<p>Kode: {{ $film->kode }}</p>
<p>Judul: {{ $film->judul }}</p>
<p>Genre: {{ $film->genre }}</p>
<p>Tahun: {{ $film->tahun }}</p>
<a href="{{ route('film.index') }}">Kembali</a>
@endsection