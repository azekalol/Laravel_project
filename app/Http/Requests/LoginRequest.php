<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
          'name' => 'required|min:3|max:10',
          'password' => 'required|min:7|max:22'
        ];
    }

    public function messages()
    {
      return [
        'name.required' => 'Поле login является обязательным',
        'email.required' => 'Поле email является обязательным',
        'password.required' => 'Поле password является обязательным'
      ];
    }
}
