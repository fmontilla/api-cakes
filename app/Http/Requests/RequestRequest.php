<?php

namespace App\Http\Requests;

use App\Models\Cake;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RequestRequest extends FormRequest
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
            'email' => 'required|email',
            'cake_id' => 'required',
            'quantity' => 'required|numeric|gt:0'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Informe um email.',
            'email.email' => 'Informe um email válido.',
            'cake_id.required' => 'Informe um bolo.',
            'quantity.required' => 'Informe uma quantidade.',
            'quantity.numeric' => 'Informe um número.',
            'quantity.gt' => 'Informe um número maior que 0.',
        ];
    }

    public function withValidator($validator)
    {
        if ($this->quantity) {
            $validator->after(function ($validator) {
                if (
                    !Cake::query()
                        ->where('id', $this->cake_id)
                        ->where('quantity', '>=', $this->quantity)
                        ->exists()
                ) {
                    $validator->errors()->add('quantity.exists', 'Não temos mais este bolo.');
                }
            });
        }
    }
}
