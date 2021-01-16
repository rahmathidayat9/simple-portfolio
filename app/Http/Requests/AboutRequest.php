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
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png,svg,gif',
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'phone' => 'required',
        ];
    }
}
