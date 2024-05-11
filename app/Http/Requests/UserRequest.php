<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
			'cedula' => 'required|string|min:8',
			'name' => 'required|string',
			'celular' => 'required|string',
			'email' => ['required', 'email', 'regex:/@/'],
			'rol_id' => 'string',
            'password' => [
                'required',
                'string',
                'min:8',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/[a-z]/', $value) || !preg_match('/[A-Z]/', $value) || !preg_match('/\d/', $value)) {
                        $fail('La contraseña debe contener al menos una letra mayúscula, una letra minúscula y al menos un número.');
                    }
                },
            ],
        ];
    }
}
