<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'phone' => 'required|numeric',
            'address' => 'required|max:200|min:20',
            'email' => 'required|email|max:50|min:10',
            'photo' => 'required|max:100|mimes:png,jpg,jpeg',
            'facebook' => 'required|max:100|min:10',
            'github' => 'required|max:100|min:10',
            'linkdin' => 'required|max:100|min:10',
            'instagram' => 'required|max:100|min:10',
            'description' => 'required|max:500|min:50',
            

             
            
        ];
    }
}
