<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderRequest extends FormRequest
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
            'navbar_title' => 'required',
            'up_text' => 'required',
            'down_text' => 'required',
            'file' => 'required|mimes:jpg,png,jpeg,gif,svg,jfif',
        ];
    }
}
