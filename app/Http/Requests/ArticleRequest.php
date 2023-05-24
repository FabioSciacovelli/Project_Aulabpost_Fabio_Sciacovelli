<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
                'title' => 'required|unique:articles|min:5',
                'subtitle' => 'required|unique:articles|min:5',
                'body' => 'required|min:10',
                'image' => 'image|required',
                'category' => 'required',
        ];
    }

    public function messages():array{

        return[
            
            'title.required' => 'Devi inserire il titolo dell\' articolo',
            'title.min' => 'Il titolo deve avere minimo 5 caratteri',
            'subtitle.required' => 'Devi inserire un sottotitolo',
            'subtitle.min' => 'Il sottotitolo deve avere almeno 5 caratteri',
            'body.required' => 'Devi inserire il corpo dell\' articolo',
            'body.min' => 'IL corpo del testo deve avere almeno 10 caratteri',
            'image.required' => 'Devi inserire una immagine',
            'category.required' => 'Devi inserire una categoria',
        ];
        
    }
}