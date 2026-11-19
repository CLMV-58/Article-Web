<?php

namespace App\Laravel\Requests\Backoffice;

use Illuminate\Foundation\Http\FormRequest;

class AdminAccountRequest extends FormRequest
{
     
    public function rules()
    {
        $rules = [
            'email' => 'required|email|unique:admin,email',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:4|confirmed',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'email.required' => 'Email address is required',
            'email.email' => 'Please enter a valid email address',
            'email.unique' => 'This email has already been registered',
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'username.required' => 'Username is required',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 4 characters',
            'password.confirmed' => 'Passwords do not match',
        ];
    }
}
