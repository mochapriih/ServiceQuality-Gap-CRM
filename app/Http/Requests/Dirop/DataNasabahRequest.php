<?php

namespace App\Http\Requests\Dirop;

use Illuminate\Foundation\Http\FormRequest;

class DataNasabahRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rekening' => ['required', 'numeric', 'digits:10', ],
            'ktp' => ['required', 'numeric', 'digits:16', ],
            'nama' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required','date'],
            'jenis_kelamin' => ['required', 'string', 'max:20',],
            'telepon' => ['required', 'string', 'max:255', ],
            'alamat' => ['required', 'string', 'max:255'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'nama_ibu' => ['required', 'string', 'max:50'],
            'nama_pasangan' => ['max:50'],
            'saldo' => ['numeric', ],
            'produk' => ['required', 'string', 'max:50'],
            'tanggal' => ['date'],
        ];
    }
}
