<?php

namespace App\Http\Requests\Example;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:30'],
            'last_name' => ['required', 'string', 'min:3', 'max:30'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            'email' => ['required', 'email', 'max:255', Rule::unique('clients')->ignore($this->client)],
            'phone' => ['required', 'string', 'min:8', 'max:18', 'regex:/^\+?[0-9\s\-]{8,18}$/', Rule::unique('clients')->ignore($this->client)],
            'gender' => ['required', 'string', 'in:male,female'],
            'slug' => [Rule::unique('clients')->ignore($this->client)],
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
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre debe ser una cadena de texto',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre no debe tener más de 30 caracteres',
            'last_name.required' => 'El apellido es requerido',
            'last_name.string' => 'El apellido debe ser una cadena de texto',
            'last_name.min' => 'El apellido debe tener al menos 3 caracteres',
            'last_name.max' => 'El apellido no debe tener más de 30 caracteres',
            'image.image' => 'El archivo debe ser una imagen',
            'image.mimes' => 'El archivo debe ser una imagen de tipo: jpeg, png, jpg, gif o webp',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'El correo electrónico debe ser una dirección de correo válida',
            'email.max' => 'El correo electrónico no debe tener más de 255 caracteres',
            'phone.required' => 'El teléfono es requerido',
            'phone.string' => 'El teléfono debe ser una cadena de texto',
            'phone.min' => 'El teléfono debe tener al menos 8 caracteres',
            'phone.max' => 'El teléfono no debe tener más de 18 caracteres',
            'phone.regex' => 'El teléfono no tiene un formato válido',
            'gender.required' => 'El género es requerido',
            'gender.string' => 'El género debe ser una cadena de texto',
            'gender.in' => 'El género debe ser masculino o femenino',
        ];
    }
}
