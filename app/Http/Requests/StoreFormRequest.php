<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'comment' => 'required|max:600',
            'email' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'comment.required'=>'We need your comment. Please feel free to type here!',
            'comment.max'=>'We have a max level of 600 characters. If possible please summarize so we can help you better.',
            'email.required'=>'Email field is there for a reason!',
        ];
    }
}
