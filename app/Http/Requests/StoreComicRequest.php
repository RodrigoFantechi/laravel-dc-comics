<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:comics,title|max:80|min:5',
            'description' => 'required|max:80',
            'thumb' => 'required|max:250',
            'price' => 'required|max:8',
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Il titolo é obbligatorio',
            'title.unique' => 'Il titolo è gia presente in libreria',
            'title.min' => 'Il titolo deve essere almeno :min caratteri',
            'title.max' => 'Il titolo deve essere almeno :max caratteri',
            'thumb.required' => "L'immagine è obbligatoria",
            'thumb.max' => "L'immagine puó essere massimo :max caratteri",
            'description.required' => 'La descrizione è obbligatoria',
            'description.max' => 'La descrizione deve essere massimo :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.max' => 'Il prezzo puó essere massimo :max caratteri'
        ];
    }
}
