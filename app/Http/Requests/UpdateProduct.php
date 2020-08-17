<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
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
            'name' => 'required|string|min:5|max:255',
            'name_author' => 'required|string|min:5|max:255',
            'feature_image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
            'contents' => 'required|string|min:10|'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name can\'t be more 255 characters',
            'name.min' => 'The name can\'t be less 5 characters',
            'name_author.required' => 'The name field is required.',
            'name_author.max' => 'The name can\'t be more 255 characters',
            'name_author.min' => 'The name can\'t be less 5 characters',
            'feature_image_path.required' => 'Image is required',
            'feature_image_path.image' => 'Link is image',
            'feature_image_path.mimes' => 'Link has mimes:jpeg,png,jpg,gif,svg',
            'feature_image_path.max' => 'Image is max:2048',
            'category_id' => 'Category is required',
            'contents.required' => 'Category Parent is required',
            'contents.min' => 'The name can\'t be less 10 characters',
        ];
    }
}
