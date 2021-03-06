<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaStoreRequest extends FormRequest
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
            'judul' => 'required',
             'isi' => 'required', 
             'poster' => 'required', 
         ];
    }

    public function messages()
    {
        return [
           'judul.required' => "judul wajib di isi",
           'isi.required' => "isi Artikel wajib di isi",
           'poster.required' => "Poster Artikel wajib di isi",
        ];
    }
}
