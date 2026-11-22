@extends('layouts.app')

@section('judul', 'Daftar Film')

@section('konten')
@include('partials.pesan')

<a href="{{ route('film.create') }}">+ Tambah Film</a>

<table border="1" cellpadding="6">
<tr><th>Kode</th><th>Judul</th><th>Genre</th><th>Tahun</th><th>Aksi</th></tr>
@forelse ($film as $f)
<tr>
<td>{{ $f->kode }}</td>
<td>{{ $f->judul }}</td>
<td>{{ $f->genre }}</td>
<td>{{ $f->tahun }}</td>
<td>
<a href="{{ route('film.show', $f) }}">Detail</a>
<a href="{{ route('film.edit', $f) }}">Ubah</a>
<form method="POST" action="{{ route('film.destroy', $f) }}"
style="display:inline" onsubmit="return confirm('Hapus film ini?')">
@csrf
@method('DELETE')
<button type="submit">Hapus</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="5">Belum ada data film.</td></tr>
@endforelse
</table>

{{ $film->links() }}
@endsection