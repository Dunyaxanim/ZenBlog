<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterUpdateRequest extends FormRequest
{

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
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ];
        $oldPassword = $this->input('old-password');
        $userPassword = auth()->user()->password;
        if (!empty($oldPassword)) {
            if(!Hash::check($oldPassword, $userPassword)){
                throw ValidationException::withMessages([
                    'old-password' => ['Password does not match'],
                ]);
            }else{
            $rules['password'] = ['required', 'string', 'min:4', 'confirmed'];
        }
        }
        return $rules;
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Please, Enter Name',
            'email.unique' => 'This Email is already exsist',
            'password.min' => 'Include at least 4 characters',
            'password.confirmed' => 'The two passwords do not match each other',
            'password.required' => 'Please, include the password',
            'password.test'=>'oldpasword dogru deyil',
        ];
    }
}
