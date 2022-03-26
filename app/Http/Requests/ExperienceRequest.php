<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'titre' => 'required|max:100|min:20',
            'sous_titre' => 'required|max:200|min:20',
            'description' => 'required|max:500|min:50',
            'begin_date' => 'required|max:50|min:5',
            'end_date' => 'required|max:50|min:5',
        ];
    }
}
