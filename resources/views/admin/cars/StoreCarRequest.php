<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'brand_id' => 'required|exists:brands,id',
            'model' => 'required|string|max:255',
            'body_type_id' => 'required|exists:body_types,id',
            'engine_type_id' => 'required|exists:engine_types,id',
            'drive_type_id' => 'required|exists:drive_types,id',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'price' => 'required|integer|min:0',
            'mileage' => 'nullable|integer|min:0',
            'color' => 'nullable|string|max:50',
            'transmission' => 'nullable|string|max:50',
            'power' => 'nullable|integer|min:0',
            'status' => 'required|in:in_stock,new,on_order',
            'description' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}