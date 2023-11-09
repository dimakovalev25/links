<?php

namespace App\Http\Requests\Person;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [

            'name' => 'required|string',
            'job' => 'required|string',
            'age' => 'required|integer'
        ];
    }
}
