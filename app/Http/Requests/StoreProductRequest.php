<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            "title" => ['required', 'string'],
            "description" => ['required', 'string'],
            "category_id" => ["required"],
            "price" => ['required'],
            'images'   => ['required'],
            'images.*' => ['required',  'mimes:png,jpg,jpeg,webp'],
            "country" => ["required", "string"],
            "city" => ['required', "string"],
            "address" => ["required", 'string'],
            "catalog_title" => ['string'],
            "description_catalog" => ['string'],
            'price_base' => ['numeric'],
            'available_days' => ['required']
        ];
    }
}
