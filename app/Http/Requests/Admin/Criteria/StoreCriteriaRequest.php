<?php

namespace App\Http\Requests\Admin\Criteria;

use Illuminate\Foundation\Http\FormRequest;

class StoreCriteriaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'as' => 'required|max:255',
            'value' => 'required|numeric',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Nama tidak boleh kosong',
            'name.max' => 'Nama terlalu panjang',
            'as.required' => 'Alias tidak boleh kosong',
            'as.max' => 'Alias terlalu panjang',
            'value.required' => 'Nilai tidak boleh kosong',
            'value.numeric' => 'Nilai Harus angka',
        ];
    }
}
