<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUserProfileImageRequest extends FormRequest
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
            'image_profile' => 'required | image | max:2040'
        ];
    }

    public function messages()
    {
        return [
            'image_profile.image' => 'Please upload an image',
            'image_profile.required' => 'Submit an image first'
        ];
    }
}
