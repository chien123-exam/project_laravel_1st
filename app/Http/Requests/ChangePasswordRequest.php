<?php

namespace App\Http\Requests;

use App\Rules\CheckOldPassword;
use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordRequest extends FormRequest
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
            'old_password' => ['required',  new CheckOldPassword ],
            'new_password' => ['required', 'min:6', 'confirmed']
        ];

        return $rules;
    }
}
