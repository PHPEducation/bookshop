<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditFormRequest extends FormRequest
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
            'username' => 'required|string|max:20',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'birthday' => 'required',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:11',
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
