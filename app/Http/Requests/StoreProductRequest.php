<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:products',
            ],
            'ar_title' => [
                'string',
                'nullable',
            ],
            'product_type' => [
                'string',
                'nullable',
            ],
            'ar_product_type' => [
                'string',
                'nullable',
            ],
            'diet_needs' => [
                'string',
                'nullable',
            ],
            'ar_diet_needs' => [
                'string',
                'nullable',
            ],
            'specialty' => [
                'string',
                'nullable',
            ],
            'ar_specialty' => [
                'string',
                'nullable',
            ],
            'package_dimensions' => [
                'string',
                'nullable',
            ],
            'ar_package_dimensions' => [
                'string',
                'nullable',
            ],
            'package_weight' => [
                'string',
                'nullable',
            ],
            'ar_package_weight' => [
                'string',
                'nullable',
            ],
            'storage_requirements' => [
                'string',
                'nullable',
            ],
            'ar_storage_requirements' => [
                'string',
                'nullable',
            ],
            'origin_country' => [
                'string',
                'nullable',
            ],
            'ar_origin_country' => [
                'string',
                'nullable',
            ],
            'currency' => [
                'string',
                'nullable',
            ],
        ];
    }
}
