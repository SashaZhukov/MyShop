<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('web')->check();;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
//            'image' => 'required|image:jpeg, jpg, png, svg',
//            'name' => 'required|alpha_dash:ascii',
//            'price' => 'required|integer',
//            'description' => 'required|alpha_dash:ascii|min:16|max:500',
//            'color' => 'required|array',
//            'size' => 'required|array',
//            'category' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'image.required' => 'The image field must not be empty',
            'image.image' => 'The image field must to have: JPEG, JPG, PNG, SVG',
            'name.required' => 'The name field must not be empty',
            'name.alpha_dash' => 'The name field must to have symbols: A-Z, a-z',
            'price.required' => 'The price field must not be empty',
            'price.integer' => 'The price field must to have only numbers',
            'description.required' => 'The description field must not be empty',
            'description.alpha_dash' => 'The description field must to have symbols: A-Z, a-z and -, _',
            'description.min' => 'The description field must to have minimum 16 symbols',
            'description.max' => 'The description field must to have maximum 500 symbols',
            'colors.required' => 'The colors must not be empty',
            'sizes.required' => 'The sizes must not be empty',
            'categories.required' => 'The categories must not be empty'
        ];
    }
}
