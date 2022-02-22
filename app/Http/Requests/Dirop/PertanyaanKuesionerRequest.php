<?php

namespace App\Http\Requests\Dirop;

use Illuminate\Foundation\Http\FormRequest;

class PertanyaanKuesionerRequest extends FormRequest
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
            'kategori_kuesioner' => ['required', 'string', 'max:30'],
            'pertanyaan' => ['string', 'max:500'],
        ];
    }
}
