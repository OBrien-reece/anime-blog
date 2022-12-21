<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitCharacterRequest extends FormRequest
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
            'characters' => 'required | min:2 | unique:characters',
            'voice_actor' => 'required | min:2',
            'power_desc' => 'required | min:500',
            'image_path' => 'required | mimes:jpeg,jpg,png | max:5048',
            'image_path_2' => 'required | mimes:jpeg,jpg,png | max:5048'
        ];
    }

    public function messages()
    {
        return [
            'characters.required' => 'The character name cannot be left blank',
            'voice_actor.required' => 'The voice actor name cannot be left blank',
             'power_desc.required' => 'The description cannot be blank',
             'image_path.required' => 'Please upload an image',
             'image_path_2.required' => 'Please upload an image',
        ];
    }
}
