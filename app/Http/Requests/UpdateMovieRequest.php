<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMovieRequest extends FormRequest
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
            'title' => ['required', Rule::unique('movies')->ignore($this->movie)],
            'original_title' => ['required', 'max:70'],
            'release_date' => ['required', 'date_format:Y-m-d'],
            'nationality' => ['required', 'max:20'],
            'vote' => ['required', 'numeric', 'between:1,10'],
            'cover_path' => ['required', 'max:100'],
            'cast' => ['nullable'],

            'genre' => ['required'],

        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.unique' => 'Il project con questo titolo è già presente nella pagina',
            'original_title.required' => 'Il titolo originale è obbligatorio',
            'original_title.max' => 'Il titolo originale può essere lungo al massimo :max caratteri.',
            'release_date.date_format' => 'La data inserita non è nel formato corretto',
            'release_date.required' => 'La data è obbligatoria',
            'nationality.required' => 'La nazionalità è obbligatoria',
            'vote.required' => 'Il voto è obbligatorio',
            'cover_path.required' => 'La copertina è obbligatoria',
            'nationality.max' => 'La nazionalità può essere lungo al massimo :max caratteri.',
            'cover_path.max' => 'Il link dell\'immagine può essere lungo al massimo :max caratteri.',
            'genre_id.exists' => 'Il tag selezionato non è valido',
            'cast_id.exists' => 'Il tag selezionato non è valido',
            'movie_id.exists' => 'Il tag selezionato non è valido',

        ];
    }
}
