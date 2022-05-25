<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
            'name_vi' => [
                'required', 'max:255',
                Rule::unique('categories')->ignore($this->category),
            ],
            'name_en' => [
                'required', 'max:255',
                Rule::unique('categories')->ignore($this->category),
            ],
            'name_ja' => [
                'required', 'max:255',
                Rule::unique('categories')->ignore($this->category),
            ],
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'Loại danh mục là trường bắt buộc.', 
            'name_vi.required' => 'Tên danh mục (Tiếng Việt) là trường bắt buộc.', 
            'name_vi.max' => 'Tên danh mục (Tiếng Việt) không được dài quá :max ký tự.', 
            'name_vi.unique' => 'Tên danh mục (Tiếng Việt) đã tồn tại.', 
            'name_en.required' => 'Tên danh mục (Tiếng Anh) là trường bắt buộc.', 
            'name_en.max' => 'Tên danh mục (Tiếng Anh) không được dài quá :max ký tự.', 
            'name_en.unique' => 'Tên danh mục (Tiếng Anh) đã tồn tại.', 
            'name_ja.required' => 'Tên danh mục (Tiếng Nhật) là trường bắt buộc.', 
            'name_ja.max' => 'Tên danh mục (Tiếng Nhật) không được dài quá :max ký tự.', 
            'name_ja.unique' => 'Tên danh mục (Tiếng Nhật) đã tồn tại.', 
        ];
    }
}
