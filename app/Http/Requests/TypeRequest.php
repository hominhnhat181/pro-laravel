<?php

namespace App\Http\Requests;
use DB;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TypeRequest extends FormRequest
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
        // "sale_price" => "required_if:list_type,==,selling"
        // $d = DB::table('types')->get();
        // // $d = $this->typeName;
       
        // $d = $this->categories_id;
        // dd($d);


        return [
        'typeName' => ['required',
            Rule::unique('types','typeName')->ignore($this->type_id),
            ],
        'categories_id' =>'required',
    ];

    
        // 'categories_id'=> "required_if:'typeName',==,selling"

        // return [
        // 'categories_id' => Rule::requiredIf('typeName','=', 1),
        // ];


        // 'sale_price' => 'required_if:list_type,==,For Sale',
        //     if ('typeName' => Rule::unique('categories','catName')) {
        //         return [
        //             'categories_id' =>Rule::notIn(1),
                
        //         ];
        //     }
        //         else{
        //         return [
        //         'typeName' => 'required',
        //         'categories_id' => 'required',
        //         ];
        //     }
        
    }
}
