<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackegeRequest extends FormRequest
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
            'title' => 'required|max:255',
            'location' => 'required|max:255',
            'about' => 'required',
            'featured_event' => 'required|max:255',
            'language' => 'required|max:255',
            'foods' => 'required|max:255',
            'departure_date' => 'required|date',
            'duration' => 'required|max:255',
            'type' => 'required|max:255',
            'price' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul tidak boleh kosong',
            'title.max:255' => 'Maksimal 255 huruf',
            'location.required' => 'Lokasi tidak boleh kosong',
            'location.max:255' => 'Maksimal 255 huruf',
            'about.required' => 'About tidak boleh kosong',
            'fatured_event.required' => 'Feature Event tidak boleh kosong',
            'fatured_event.max:255' => 'Maksimal 255 huruf',
            'laguage.required' => 'Langauge tidak boleh kosong',
            'laguage.max:255' => 'Maksimal 255 huruf',
            'foods.required' => 'Foods tidak boleh kosong',
            'foods.max:255' => 'Maksimal 255 huruf',
            'departure_date.required' => 'Departure date tidak boleh kosong',
            'departure_date.max:255' => 'Maksimal 255 huruf',
            'duration.required' => 'Duration tidak boleh kosong',
            'duration.max:255' => 'Maksimal 255 huruf',
            'type.required' => 'Type tidak boleh kosong',
            'type.max:255' => 'Maksimal 255 huruf',
            'price.required' => 'Price tidak boleh kosong',
            'price.max:255' => 'Maksimal 255 huruf',
        ];
    }
}
