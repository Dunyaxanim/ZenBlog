<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ];
    }
    public function messages(): array{
        return [
            'name.required'=> 'Please, Enter Name',
            'email.unique'=> 'This Email is already exsist',
            'password.min'=> 'Include at least 4 characters',
            'password.confirmed'=> 'The two passwords do not match each other',
            'password'=> 'Please, include the password correctly',
        ];
    }
}
