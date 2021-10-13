<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
             'text1' => 'required', 
             'text2' => 'required', 
             'text3' => 'required', 
         ];
    }

    public function messages()
    {
        return [
           'judul.required' => "judul wajib di isi",
           'isi.required' => "isi berita wajib di isi",
        ];
    }
}
