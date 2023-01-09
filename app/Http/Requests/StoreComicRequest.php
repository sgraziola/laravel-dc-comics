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
            'title' => 'required|unique:comics,title|min:5|max:150',
            'description' => 'required|min:25|max:500',
            'thumb' => 'required|max:255',
            'price' => 'required|decimal:2|max:6',
            'series' => 'required|max:150',
            'sale_date' => 'required|max:20',
            'type' => 'required|max:150',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.unique' => 'Il titolo è univoco',
            'title.min' => 'La lunghezza minima del titolo è :min',
            'title.max' => 'La lunghezza massima del titolo è :max',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La lunghezza minima della descrizione è :min',
            'description.max' => 'La lunghezza massima della descrizione è :max',
            'thumb.required' => 'L\'indirizzo dell\'immagine è obbligatorio',
            'thumb.max' => 'La lunghezza massima dell\'indirizzo dell\'immagine è :max',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.decimal' => 'Il prezzo deve essere un numero decimale con massimo due cifre dopo la virgola',
            'price.max' => 'La lunghezza massima del prezzo è :max',
            'series.max' => 'La lunghezza massima delle serie è :max',
            'series.required' => 'La serie è obbligatoria',
            'sale_date.max' => 'La lunghezza massima della data di vendita è :max',
            'sale_date.required' => 'La data di vendita è obbligatoria',
            'type.max' => 'La lunghezza massima del tipo è :max',
            'type.required' => 'Il tipo è obbligatorio',
        ];
    }
}
