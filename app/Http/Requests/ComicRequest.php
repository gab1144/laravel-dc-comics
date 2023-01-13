<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:200|min:2',
            'thumb' => 'max:255',
            'price' => 'required',
            'series' => 'required|max:100|min:2',
            'sale_date' => 'required',
            'type' => 'required|max:50|min:2'
        ];
    }
    public function messages ()
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.max' => 'Il titolo deve avere al massimo :max caratteri',
            'title.min' => 'Il titolo deve avere minimo :min caratteri',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'series.required' => 'La serie è un campo obbligatorio',
            'series.max' => 'La serie deve avere al massimo :max caratteri',
            'series.min' => 'La serie deve avere minimo :min caratteri',
            'sale_date.required' => 'La data di uscita è un campo obbligatorio',
            'type.required' => 'Il tipo è un campo obbligatorio',
            'type.max' => 'Il tipo deve avere al massimo :max caratteri',
            'type.min' => 'Il tipo deve avere minimo :min caratteri',
            'thumb.max' => 'L\'url dell\'immagine può avere al massimo :max caratteri',
        ];
    }
}
