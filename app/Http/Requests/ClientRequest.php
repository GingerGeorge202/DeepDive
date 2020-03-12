<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name'=>'required|min:1|max:30',
            'surname'=>'required|min:1|max:30',
            'email'=>'required|email|min:1|max:30',
            'phone'=>'required|min:1|max:30|regex:/^\+380\d{9}$/',
            'city'=>'required|min:1|max:30',
        ];
    }
}
