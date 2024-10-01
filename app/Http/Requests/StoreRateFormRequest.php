<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRateFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'weight'    => 'required',
            'distance'  => 'required',
            'price'     => 'required'
        ];
    }
}
