<?php

namespace App\Http\Requests\Star;


use Illuminate\Foundation\Http\FormRequest;

class StarRequest extends FormRequest
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
        $rules = [
            'nom' => 'required',
            'prenom' => 'required',
            'url_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
        ];

        if ($this->getMethod() == 'PUT') {
            $rules ['url_image'] = 'image|mimes:jpeg,png,jpg|max:2048';
        }


        return $rules;
    }
}
