<?php

namespace App\Http\Requests\Order;

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
            'car_id' => 'required|integer|exists:cars,id',
            'book_start_date' => 'required',
            'book_end_date' => 'required',
            'user_id' => 'nullable|integer',
            'guest_name' => 'nullable|string',
            'guest_lastname' => 'nullable|string',
            'guest_phone' => 'nullable|string',
            'total_price' => 'required|integer',
        ];
    }
}
