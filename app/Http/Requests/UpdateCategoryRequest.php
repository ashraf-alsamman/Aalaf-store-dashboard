<?php

namespace App\Http\Requests;

use App\Models\Category;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('category_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:categories,title,' . request()->route('category')->id,
            ],
            'ar_title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
