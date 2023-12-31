<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
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

                // Assicuro che il campo title sia unico nella tabella posts, ma ignoro l'attuale record (utile durante l'aggiornamento di un post esistente).
                Rule::unique('posts')->ignore($this->post),
                'string',
                'max:255',
                'min:3'
            ],
            'body' => [
                'required',
                'string',
                'max:255',
                'min:3'
            ],
            'technology_id' => [
                'nullable',

                // Verifico che il valore fornito esista nella colonna id della tabella posts.
                'exists:posts,id'
            ],
            'collaborators' => [
                'nullable',

                // Verifico che il valore fornito esista nella colonna id della tabella collaborators.
                'exists:collaborators,id'
            ]
        ];
    }

    public function messages()
    {
        return [
            'image.required' => "L'URL dell'immagine è obbligatorio!",
            // 'image.url' => "Dovresti inserire un URL di un'immagine!",
            'title.required' => 'Il titolo è obbligatorio!',
            'title.unique:posts' => 'Questo titolo già esiste!',
            'title.string' => 'Il titolo deve essere un insieme di caratteri alfanumerici!',
            'title.max' => 'Il titolo deve essere lungo massimo :max caratteri!',
            'title.min' => 'Il titolo deve avere minimo :min caratteri!',
            'body.required' => 'La descrizione è obbligatoria!',
            'body.string' => 'La descrizione deve essere un insieme di caratteri alfanumerici!',
            'body.max' => 'La descrizione deve essere lungo massimo :max caratteri!',
            'body.min' => 'La descrizione deve avere minimo :min caratteri!'
        ];
    }
}
