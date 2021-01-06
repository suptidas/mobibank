<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class empRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email'=> 'required',
            'type' => 'required',
            'password' => 'required|min:4'
        ];
    }

    public function messages()
    {
           return 
           [ 
            'name.required'=> "Name is empty..",
            'name.min'=> "Name Must be at least 3 character",
            'type.required'=> "Type can't left empty ",
            'email.required'=> "Email can't left empty....",
            'password.min'=> "Password must be at least 4 character."
        ];
    }
}
