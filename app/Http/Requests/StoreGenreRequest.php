<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGenreRequest extends FormRequest
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
            'genre' => ['required', 'unique:genres', 'max:150'],

        ];
    }
    public function messages()
    {
        return [
            'genre.required' => 'Il genere è obbligatorio',
            'genre.unique' => 'Il movies con questo genere è già presente nella pagina',
            'genre.max' => 'Il genere può essere lungo al massimo :max caratteri.',

        ];
    }
}
