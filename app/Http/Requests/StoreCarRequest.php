<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   public function rules()
{
    return [
        'brand_id' => 'required|exists:brands,id',
        'body_type_id' => 'required|exists:body_types,id',
        'engine_type_id' => 'required|exists:engine_types,id',
        'drive_type_id' => 'required|exists:drive_types,id',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'year' => 'required|integer|min:2000|max:' . (date('Y') + 1),
        'status' => 'required|in:new,in_stock,on_order',
        'images' => 'nullable|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ];
}
}
