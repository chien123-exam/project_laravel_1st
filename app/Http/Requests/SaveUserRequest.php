<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveUserRequest extends FormRequest
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
        $rules = [
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->user)],
            'phone' => ['required', 'numeric'],
            'password' => ['required', 'min:6'],
            'password_confirm' => ['required', 'same:password'],
            'address' => ['required'],
            'gender' => ['required', 'in:1,2'],
            'avatar' => ['nullable'],
        ];

        //When create user

        if(empty($this->user)) {
            $rules['password'] = ['required', 'min:6'];
            $rules['password_confirm'] = ['required', 'same:password'];
        }

        //When update

        if(!empty($this->user)) {
            $rules['password'] = ['nullable', 'min:6'];
            $rules['password_confirm'] = ['nullable', 'same:password'];
        }

        return $rules;
    }
}
