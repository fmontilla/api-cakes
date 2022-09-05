<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CakeRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|required',
            'weight' => 'sometimes|required',
            'value' => 'sometimes|required',
            'quantity' => 'sometimes|required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe um nome válido.',
            'weight.required' => 'Informe um peso válido.',
            'value.required' => 'Informe um valor válido.',
            'quantity.required' => 'Informe uma quantidade válida.',
        ];
    }
}
