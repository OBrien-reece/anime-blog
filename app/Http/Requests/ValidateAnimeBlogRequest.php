<?php

namespace App\Http\Requests;

use App\Rules\nameRegex;
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
            'anime_title' => 'required | min:2', new nameRegex,
            'blog_title' => ['required','min:5', new nameRegex],
            'description' => ['required','min:1000', new nameRegex],
            'aired' => ['required'],
            'studio' => ['required', new nameRegex]
        ];
    }
}
