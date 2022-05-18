<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string',
            'age' => 'nullable|int|max:255',
            'sate' => 'nullable|string|max:255',
            'country' => 'nullable|int|max:255',
            'code' => 'nullable|int|max:255',
            'email' => 'nullable|email|max:255',
        ];
    }
}
