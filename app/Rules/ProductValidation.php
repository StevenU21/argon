<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ProductValidation implements ValidationRule
{
    public static function rules(): array
    {
        return [
            'product.name' => 'required|string|max:255',
            'product.price' => 'required|numeric|min:0',
            'product.stock' => 'required|integer|min:0',
            'product.description' => 'required|string',
        ];
    }

    public static function messages(): array
    {
        return [
            'product.name.required' => 'El nombre del producto es obligatorio.',
            'product.name.string' => 'El nombre del producto debe ser una cadena de texto.',
            'product.name.max' => 'El nombre del producto no puede tener más de 255 caracteres.',
            'product.price.required' => 'El precio del producto es obligatorio.',
            'product.price.numeric' => 'El precio del producto debe ser un número.',
            'product.price.min' => 'El precio del producto debe ser mayor o igual a 0.',
            'product.stock.required' => 'El stock del producto es obligatorio.',
            'product.stock.integer' => 'El stock del producto debe ser un número entero.',
            'product.stock.min' => 'El stock del producto debe ser mayor o igual a 0.',
            'product.description.required' => 'La descripción del producto es obligatoria.',
            'product.description.string' => 'La descripción del producto debe ser una cadena de texto.',
        ];
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Aquí iría la lógica de validación personalizada si es necesaria
    }
}
