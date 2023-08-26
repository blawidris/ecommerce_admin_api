<?php

namespace App\Http\Requests\Config;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'store_name' => ['required', 'string'],
            'store_owner' => ['required', 'string'],
            'store_address' => ['required', 'string'],
            'store_email' => ['required', 'email'],
            'store_phone' => ['required', 'alpha_num'],
            'meta_title' => ['required', 'string']
        ];
    }
}
