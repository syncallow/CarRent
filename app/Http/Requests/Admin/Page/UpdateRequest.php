<?php

namespace App\Http\Requests\Admin\Page;

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
            'name' => 'required|string',
            'title' => 'required|string',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'text' => 'string|nullable',
            'image' => 'nullable|file',
            'is_published' => 'required',
        ];
    }
}
