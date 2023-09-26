<?php

namespace App\Http\Requests\Admin\Info;

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
            'logo' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'facebook_link' => 'string',
            'instagram_link' => 'string',
            'twitter_link' => 'string',
            'linkedin_link' => 'string',
            'steps_title' => 'required|string',
            'steps_desc' => 'required|string',
            'cars_title' => 'required|string',
            'cars_desc' => 'required|string',
            'features_title' => 'required|string',
            'features_desc' => 'required|string',
            'footer_text' => 'required|string',
            'copyright_text' => 'required|string',
        ];
    }
}
