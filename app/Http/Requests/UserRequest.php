<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
           
            'name' => 'Required|min:3|max:50',
            'email' => 
            [
                'Required','email',
                Rule::unique('users','email')->ignore($this->admin_id),
                'bail',
            ],

            'password' => 'Present|confirmed'
        ];
    }
}
