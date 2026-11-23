<?php

namespace App\Laravel\Requests\Backoffice;

use App\Laravel\Requests\RequestManager;

use Illuminate\Validation\Rule;

class EditAdminAccountRequest extends RequestManager
{
    public function rules()
    {
        $adminId = $this->route('id');

        $rules = [
            'email' => ['required', 'email', Rule::unique('admin', 'email')->ignore($adminId),],
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|min:4|confirmed',
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
            'password.min' => 'Password must be at least 4 characters',
            'password.confirmed' => 'Passwords do not match',
        ];
    }
}