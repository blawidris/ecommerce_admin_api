<?php

namespace App\Http\Requests\Config;

use Illuminate\Foundation\Http\FormRequest;

class StoresRequests extends FormRequest
{

    public $stopOnFirstFailure = true;

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
            'store_name' => ['required', 'string'],
            'store_owner' => ['required', 'string'],
            'store_address' => ['required', 'string'],
            'store_email' => ['required', 'email'],
            'store_phone' => ['required', 'alpha_num'],
            'meta_title' => ['required', 'string']
        ];
    }
}