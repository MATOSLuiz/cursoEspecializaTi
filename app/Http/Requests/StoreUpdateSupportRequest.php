<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSupportRequest extends FormRequest
{
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules =  [
        'subject' => 'required|min:3|max:255|unique:supports',
        'body' => [
            'required',
            'min:3',
            'max:100000',
        ],
    ];

        if($this->method() === 'PUT') {
            $rules['subject'] = [
                'required',
                'min:3',
                'max:255',

                Rule::unique('supports')->ignore($this->id)

            ];
        }

        return $rules;
    }
}
