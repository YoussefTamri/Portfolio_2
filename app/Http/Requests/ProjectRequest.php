<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        
            'photo' => 'required|max:100|mimes:png,jpg,jpeg',
            'photo_baground' => 'required|max:100|mimes:png,jpg,jpeg',
            'titre' => 'required|max:200|min:10',
            'sous_titre' => 'required|max:200|min:10',
            'github_link' => 'required|max:200|min:10',
            'demo_link' => 'required|max:200|min:10',
            'description' => 'required|max:500|min:50',
            
        ];
    }
}
