<?php

namespace App\Http\Requests\Admin\Car;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'luggage' => 'required|integer',
            'passenger' => 'required|integer',
            'doors' => 'string|integer',
            'image' => 'nullable|file',
            'is_published' => 'required',
        ];
    }
}
