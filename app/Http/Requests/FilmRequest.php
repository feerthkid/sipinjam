<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FilmRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'kode'  => ['required', 'string', 'max:20',
                        Rule::unique('films', 'kode')->ignore($this->route('film'))],
            'judul' => ['required', 'string', 'min:2', 'max:150'],
            'genre' => ['required', 'string', 'max:50'],
            'tahun' => ['required', 'integer', 'min:1900', 'max:2100'],
        ];
    }

    public function messages(): array
    {
        return [
            'kode.required'  => 'Kode film wajib diisi.',
            'kode.unique'    => 'Kode film sudah dipakai.',
            'judul.required' => 'Judul film wajib diisi.',
            'judul.min'      => 'Judul minimal 2 karakter.',
            'genre.required' => 'Genre wajib diisi.',
            'tahun.required' => 'Tahun rilis wajib diisi.',
            'tahun.integer'  => 'Tahun harus berupa angka.',
            'tahun.min'      => 'Tahun minimal 1900.',
            'tahun.max'      => 'Tahun maksimal 2100.',
        ];
    }
}