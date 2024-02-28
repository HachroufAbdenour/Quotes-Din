<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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

            'name'=>'sometimes|string|max:50',
            'logo'=>'sometimes|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'type'=>['sometimes'|'string'|Rule::in(['quote','theme'])],
            'is_free'=>'sometimes|boolean'

        ];
    }
}
