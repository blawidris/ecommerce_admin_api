<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PressPostRequest extends FormRequest
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
            'title' => ['required', 'unique:posts,title', 'max:255'],
            'cover' => ['image', 'mimetypes:image/jpeg,image/png,image/webp']
        ];
    }


}