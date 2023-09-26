<?php

namespace App\Http\Requests\CarAvailabilityCheck;

use Illuminate\Foundation\Http\FormRequest;

class CarAvailabilityCheckRequest extends FormRequest
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
            'car_id' => 'required',
            'book_start_date' => 'required',
            'book_end_date' => 'required',
        ];
    }
}
