<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
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
            'recipient.address.zipcode' => 'required|regex:/^\d{8}$/',
            'volumes' => 'required|array',
            'volumes.*.category' => 'required|integer',
            'volumes.*.amount' => 'required|integer|gt:0',
            'volumes.*.unitary_weight' => 'required|numeric||gt:0',
            'volumes.*.price' => 'required|numeric|gt:0',
            'volumes.*.sku' => 'required|string',
            'volumes.*.height' => 'required|numeric|gt:0',
            'volumes.*.width' => 'required|numeric|gt:0',
            'volumes.*.length' => 'required|numeric|gt:0',
        ];
    }

    public function messages()
    {
        return [
            'recipient.address.zipcode.required' => 'O campo CEP é obrigatório.',
            'recipient.address.zipcode.regex' => 'O CEP deve ter exatamente 8 dígitos.',

            'volumes.required' => 'O campo volumes é obrigatório.',
            'volumes.array' => 'O campo volumes deve ser um array.',

            'volumes.*.category.required' => 'O campo category do volume é obrigatório.',
            'volumes.*.category.integer' => 'O campo category do volume deve ser um número inteiro.',

            'volumes.*.amount.required' => 'O campo amount do volume é obrigatório.',
            'volumes.*.amount.integer' => 'O campo amount do volume deve ser um número inteiro.',
            'volumes.*.amount.gt' => 'O campo amount do volume deve ser maior que zero.',

            'volumes.*.unitary_weight.required' => 'O campo unitary_weight do volume é obrigatório.',
            'volumes.*.unitary_weight.numeric' => 'O campo unitary_weight do volume deve ser um número.',
            'volumes.*.unitary_weight.gt' => 'O campo unitary_weight do volume deve ser maior que zero.',

            'volumes.*.price.required' => 'O campo price do volume é obrigatório.',
            'volumes.*.price.numeric' => 'O campo price do volume deve ser um número.',
            'volumes.*.price.gt' => 'O campo price do volume deve ser maior que zero.',

            'volumes.*.sku.required' => 'O campo sku do volume é obrigatório.',
            'volumes.*.sku.string' => 'O campo sku do volume deve ser uma string.',

            'volumes.*.height.required' => 'O campo height do volume é obrigatório.',
            'volumes.*.height.numeric' => 'O campo height do volume deve ser um número.',
            'volumes.*.height.gt' => 'O campo height do volume deve ser maior que zero.',

            'volumes.*.width.required' => 'O campo width do volume é obrigatório.',
            'volumes.*.width.numeric' => 'O campo width do volume deve ser um número.',
            'volumes.*.width.gt' => 'O campo width do volume deve ser maior que zero.',

            'volumes.*.length.required' => 'O campo length do volume é obrigatório.',
            'volumes.*.length.numeric' => 'O campo length do volume deve ser um número.',
            'volumes.*.length.gt' => 'O campo length do volume deve ser maior que zero.',
        ];
    }
}
