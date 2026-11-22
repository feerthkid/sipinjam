<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Http\Requests\FilmRequest;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::orderBy('kode')->paginate(10);
        return view('film.index', compact('film'));
    }
    public function create()
    {
        return view('film.create');
    }
    public function store(FilmRequest $request)
    {
        Film::create($request->validated());
        return redirect()->route('film.index')
            ->with('sukses', 'Film berhasil ditambahkan.');
    }
    public function show(Film $film)
    {
        return view('film.show', compact('film'));
    }
    public function edit(Film $film)
    {
        return view('film.edit', compact('film'));
    }
    public function update(FilmRequest $request, Film $film)
    {
        $film->update($request->validated());
        return redirect()->route('film.index')
            ->with('sukses', 'Film berhasil diperbarui.');
    }
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('film.index')
            ->with('sukses', 'Film berhasil dihapus.');
    }
}