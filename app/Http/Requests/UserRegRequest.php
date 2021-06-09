<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegRequest extends FormRequest
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
            'email' => "required",
            'firstname' => "required",
            'lastname' => "required",
            'city' => "required",
            'password'=>'required',
            'password_confirmation'=>'required',
            'password'=>'confirmed',
        ];

    }

    public function messages()
    {
      return [
        'email.required' => 'Необходимо ввести email',
        'firstname.required' => 'Необходимо ввести имя',
        'lastname.required' => 'Необходимо ввести фамилию',
        'city.required'  => 'Необходимо ввести город',
        'password.required'  => 'Необходимо ввести пароль',
        'password_confirmation.required'  => 'Необходимо ввести пароль и подтверждение пароля',
        'password.confirmed'  => 'Пароль и подтверждение пароля не совпадают',
      ];
    }
}
