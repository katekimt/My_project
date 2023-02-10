<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformRequest extends FormRequest
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
            'name' => 'required|min:3',
            'phone' => 'required|min:10',
            'email' => 'email|nullable',
            'information' => 'nullable',
            'byPhone' => 'boolean',
            'byEmail' => 'boolean',
            'byViber' => 'boolean',
            'byTelegram' => 'boolean',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => "Поле з вашим ім'ям має бути заповнене та має містити не менше 3 букв",
            'phone.required' => "Поле з вашим телефоном має бути заповнене, щоб ми могли з вами зв'язатися та має містити не менше 10 цифр",

        ];
    }
}
