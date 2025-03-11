<?php

namespace App\Http\Requests\Example;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:255', Rule::unique('articles')->ignore($this->article)],
            'content' => ['required', 'string', 'min:6', 'max:10000'],
            'image' => ['required','max:5600'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'user_id' => ['integer', 'exists:users,id'],
            'tags' => ['required', 'array', 'min:1', 'max:5'],
            'tags.*' => ['distinct', 'integer', 'exists:tags,id']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'El título es requerido',
            'title.string' => 'El título debe ser un texto',
            'title.min' => 'El título no puede tener menos de 3 caracteres',
            'title.max' => 'El título no puede tener más de 255 caracteres',
            'title.unique' => 'El título ya está en uso',
            'content.required' => 'El contenido es requerido',
            'content.string' => 'El contenido debe ser un texto',
            'category_id.required' => 'La categoría es requerida',
            'category_id.exists' => 'La categoría seleccionada no es válida',
        ];
    }
}
