<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGenreRequest extends FormRequest
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
            'genre' => ['required', Rule::unique('genres')->ignore($this->genre), 'max:50'],

        ];
    }
    public function messages()
    {
        return [
            'genre.required' => 'Il titolo è obbligatorio',
            'genre.unique' => 'Il project con questo titolo è già presente nella pagina',
            'genre.max' => 'Il titolo può essere lungo al massimo :max caratteri.',

        ];
    }
}
