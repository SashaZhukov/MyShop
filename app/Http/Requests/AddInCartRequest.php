<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddInCartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('web')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'price' => 'required',
            'img' =>  '',
            'color' => 'required',
            'size' => 'required',
            'quantity' => 'required|min:1',
        ];
    }
}
