<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "payment_type_id" => 'required|numeric',
            "delivery_method_id" => 'required|numeric',
            "address_id" => "required",
            "comments" => ' nullable|max:500',
            "sum" => "required",
            "products" => 'required|array',
            'products.*.product_id' => 'required|numeric',
            'products.*.quantity' => 'required|numeric',
            'products.*.stock_id' => 'nullable|numeric',
        ];
    }
}
