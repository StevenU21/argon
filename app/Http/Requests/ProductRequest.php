<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:100', 'unique:products,name,except,id'],
            'description' => ['required', 'string', 'min:3', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'image' => ['nullable', 'image', 'max:2048'],
            'slug' => ['string', 'min:3', 'max:100', 'unique:products,slug,except,id'],
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
            'name.required' => 'El nombre es requerido.',
            'name.string' => 'El nombre debe ser un texto.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'name.max' => 'El nombre debe tener como máximo :max caracteres.',
            'name.unique' => 'El nombre ya está en uso.',
            'description.required' => 'La descripción es requerida.',
            'description.string' => 'La descripción debe ser un texto.',
            'description.min' => 'La descripción debe tener al menos :min caracteres.',
            'description.max' => 'La descripción debe tener como máximo :max caracteres.',
            'price.required' => 'El precio es requerido.',
            'price.numeric' => 'El precio debe ser un número.',
            'price.min' => 'El precio debe ser mayor o igual a :min.',
            'stock.required' => 'El stock es requerido.',
            'stock.integer' => 'El stock debe ser un número entero.',
            'stock.min' => 'El stock debe ser mayor o igual a :min.',
            'image.image' => 'La imagen debe ser un archivo de imagen.',
            'image.max' => 'La imagen no debe pesar más de :max kilobytes.',
            'slug.string' => 'El slug debe ser un texto.',
            'slug.min' => 'El slug debe tener al menos :min caracteres.',
            'slug.max' => 'El slug debe tener como máximo :max caracteres.',
            'slug.unique' => 'El slug ya está en uso.',
        ];
    }
}
