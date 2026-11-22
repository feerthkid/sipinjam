<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAlatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'kode' => ['required','string','max:20', Rule::unique('alats','kode')->ignore($this->route('alat'))],
            'nama' => ['required','string','min:3','max:100'],
            'stok' => ['required', 'integer', 'min:0'],
            'kondisi' => ['required', 'in:baik,rusak ringan,rusak berat'],
        ];
    }

    public function messages(): array
    {
        return [
            'kode.required' => 'Kode alat wajib diisi.',
            'kode.unique' => 'Kode alat sudah dipakai.',
            'stok.min' => 'Stok tidak boleh negatif.',
            'nama.min' => 'Nama alat minimal 3 karakter.',
        ];
    }
}
