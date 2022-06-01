<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAutor extends FormRequest
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
        return [
            'nome' => 'required | max: 100 | min: 3',
            'pais' => 'required | max: 100 | min: 3',
            'ano_nasc'=> 'required | Integer',
            'area'=> 'required | max: 100 | min: 3',
        ];
    }
}
