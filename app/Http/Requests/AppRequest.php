<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AppRequest extends FormRequest
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
            'name' => 
            [
                'required',
                Rule::unique('apps','name')->ignore($this->object_id),
                'bail'
            ],

            'title' => 'required',
            'desc' =>'required',
            'image' => 'required',
            'link' =>'required',
            'types_id' =>'required',
        ];
    }
}
