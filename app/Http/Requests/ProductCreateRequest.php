<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => "required",
            'manufacturer' => "required",
            'price' => "required",
            'description' => "required",
        ];
    }

    public function messages()
    {
      return [
        'name.required' => 'Необходимо указать наименование',
        'manufacturer.required' => 'Необходимо указать производителя',
        'price.required' => 'Цена товара обязательна',
        'description.required'  => 'Необходимо ввести описание товара',
      ];
    }
}
