<?php

namespace App\Http\Requests\Person;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'age' => 'required|integer',
            'job' => 'required|string'
        ];
    }
}
