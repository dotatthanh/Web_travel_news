<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'title_vi' => 'required',
            'title_en' => 'required',
            'title_ja' => 'required',
            'content_vi' => 'required',
            'content_en' => 'required',
            'content_ja' => 'required',
            'summary_vi' => 'required',
            'summary_en' => 'required',
            'summary_ja' => 'required',
            'category_id' => 'required',
            'image' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'title_vi.required' => 'Tiêu đề (Tiếng Việt) là trường bắt buộc.', 
            'title_en.required' => 'Tiêu đề (Tiếng Anh) là trường bắt buộc.', 
            'title_ja.required' => 'Tiêu đề (Tiếng Nhật) là trường bắt buộc.', 
            'title_vi.max' => 'Tiêu đề (Tiếng Việt) không được dài quá :max ký tự.', 
            'title_en.max' => 'Tiêu đề (Tiếng Anh) không được dài quá :max ký tự.', 
            'title_ja.max' => 'Tiêu đề (Tiếng Nhật) không được dài quá :max ký tự.', 
            'content_vi.required' => 'Mô tả (Tiếng Việt) là trường bắt buộc.', 
            'content_en.required' => 'Mô tả (Tiếng Anh) là trường bắt buộc.', 
            'content_ja.required' => 'Mô tả (Tiếng Nhật) là trường bắt buộc.', 
            'summary_vi.required' => 'Tóm tắt (Tiếng Việt) là trường bắt buộc.', 
            'summary_en.required' => 'Tóm tắt (Tiếng Anh) là trường bắt buộc.', 
            'summary_ja.required' => 'Tóm tắt (Tiếng Nhật) là trường bắt buộc.', 
            'category_id.required' => 'Danh mục là trường bắt buộc.', 
            'image.required' => 'Ảnh là trường bắt buộc.', 
            'image.image' => 'Ảnh không đúng định dạng (jpg, jpeg, png, bmp, gif, svg hoặc webp).',
        ];
    }
}
