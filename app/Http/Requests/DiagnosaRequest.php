<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiagnosaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'phone' => 'string', 'max:13',
            'city' => 'string', 'max:255',
            'occupation' => 'string', 'max:255',
            'avatar' => 'image|mimes:jpg,jpeg,png|max:1024',
        ];
    }
}
