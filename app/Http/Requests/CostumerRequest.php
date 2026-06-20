<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CostumerRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique',
            'telephone' => 'integer|required|unique',
            'balance' => 'required|decimal',
            'credit_limit' => 'decimal|required',
            'discount' => 'string|requerid|',
            'registration_date' => 'date|requerid',
            'customer_status' =>'string|requerid|',

        ];
    }
    public function messages(): array
{
    return[
        'name.requerid' => 'El nombre es requerido',
        'name.string' => 'El nombre debe de ser una cadena de texto',
        'name.max' => 'El nombre debe de tener menos de 255 caracteres',

        'email.requerid' => 'El nombre es requerido',
        'email.string' => 'El nombre debe de ser una cadena de texto',
        'email.max' => 'El nombre debe de tener menos de 255 caracteres'

    ];
}
}
