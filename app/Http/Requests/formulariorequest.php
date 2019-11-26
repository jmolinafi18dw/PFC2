<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formulariorequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'subject' => 'required|min:3|max:50',
            'message' => 'required|min:10|max:250',
        ];
    }
}