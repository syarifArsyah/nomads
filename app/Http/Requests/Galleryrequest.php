<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Galleryrequest extends FormRequest
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
            'travel_packages_id' => 'required|integer',
            'image' => 'required|image'
        ];
    }

    public function message()
    {
        return [
            'travel_packages_id.required' => 'Id tidak boleh kosong',
            'travel_packages_id.required' => 'Id harus angka',
            'travel_packages_id.exist' => 'Id belum terdaftar',
            'image.required' => 'Image tidak boleh kosong',
            'image.image' => 'Image harus berupa gambar',
        ];
    }
}
