<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'nom' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'image' => 'nullable',
            'stock_id' => 'required'
        ];
    }

    public function messages() {
        return [
            'nom.required' => 'Le nom est obligatoire',
            'nom.min' => 'Le nom doit contenir au moins 3 caractères',
            'nom.max' => 'Le nom doit contenir au plus 255 caractères',
            'description.required' => 'La description est obligatoire',
            'description.min' => 'La description doit contenir au moins 3 caractères',
            'description.max' => 'La description doit contenir au plus 255 caractères',
            'image.required' => 'L\'image est obligatoire',
        ];
    }
}
