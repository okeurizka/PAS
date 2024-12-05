<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:posts|max:200',
            'body' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A Title is required',
            'title.unique' => 'The title has already been taken.Try another title.',
            'body.required' => 'A body is required',

        ];
    }
}
