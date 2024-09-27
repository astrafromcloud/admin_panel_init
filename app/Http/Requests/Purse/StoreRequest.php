<?php

namespace App\Http\Requests\Purse;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'color' => 'required|string|max:255',
            'image_url' => 'nullable|string|max:255',
            'material' => 'nullable|string|max:255',
            'brand' => 'nullable|string|max:255',
            'size' => 'nullable|numeric|max:255',
        ];
    }
}
