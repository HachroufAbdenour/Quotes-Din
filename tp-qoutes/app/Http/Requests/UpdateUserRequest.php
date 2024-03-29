<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateUserRequest extends FormRequest
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
            'user_name'=>'sometimes|string',
            'email'=>'sometimes|email',
            'password'=>'sometimes|string|min : 8',
            'birth_date'=>'sometimes|date_format : Y-m-d',
            'nationality'=>'sometimes|string',
            'gender'=>['sometimes', Rule::in(['man','woman'])],
            'status'=>'sometimes|string',
            'type'=>'sometimes|string'





            /*
              'user_name',
        'email',
        'password',
        'birth_date',
        'nationality',
        'gender',
        'status',
        'type',
            */
        ];
    }
}
