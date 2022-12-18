<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAnimeBlogRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'anime_title' => 'required | min:2',
            'blog_title' => ['required','min:5',''],
            'description' => ['required','min:50'],
            'aired' => ['required'],
            'studio' => ['required']
        ];
    }
}
