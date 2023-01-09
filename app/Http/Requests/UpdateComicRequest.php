<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => [
                'required',
                Rule::unique('comics')->ignore($this->comic->id),
                'min:5',
                'max:80'
            ],
            'description' => 'required',
            'thumb' => 'required|max:250',
            'price' => 'required|max:8',
        ];
    }
    public function messages()
    {
        return[
            'title.required' => 'Non pui cancellare questo campo. Il titolo é obbligatorio',
            'title.min' => 'Il titolo deve essere almeno :min caratteri',
            'title.max' => 'Il titolo deve essere almeno :max caratteri',
            'thumb.required' => "Non pui cancellare questo campo. L'immagine è obbligatoria",
            'thumb.max' => "L'immagine puó essere massimo :max caratteri",
            'description.required' => 'Non pui cancellare questo campo. La descrizione è obbligatoria',
            'price.required' => 'Non pui cancellare questo campo. Il prezzo è obbligatorio',
            'price.max' => 'Il prezzo puó essere massimo :max caratteri'
        ];
    }
}
