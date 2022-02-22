<?php

namespace App\Http\Requests\Dirop;

use Illuminate\Foundation\Http\FormRequest;

class DataKaryawanRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'ktp' => ['required', 'numeric', 'digits:16', ],
            'telepon' => ['required', 'string', 'max:255', ],
            'jenis_kelamin' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
        ];
    }
}
