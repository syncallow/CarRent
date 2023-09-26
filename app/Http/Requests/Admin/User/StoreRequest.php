<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'profile_image' => 'required|file',
            'company' => 'nullable|string',
            'job' => 'nullable|string',
            'country' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'role' => 'required|integer',
        ];
    }
}
