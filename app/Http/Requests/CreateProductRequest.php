<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name'          => ['required', 'string', 'max:255'],
            'price'         => ['required', 'integer'],
            'image'         => ['required', 'mimes:jpeg,png,jpg'],
            'description'   => ['required', 'string'],
            'quantities'    => ['required', 'integer'],
            'detail'        => ['required', 'string'],
        ];

    }
    public function messages(){
        return [
            'name.required'        => 'Tên không được để trống',
            'price.required'       => 'Giá tiền không được để trống',
            'price.integer'        => 'Giá tiền phải là 1 số',
            'image.required'       => 'Ảnh không được để trống',
            'image.mimes'          => 'Ảnh phải định dạng JPG, PNG, JPEG',
            'description.required' => 'Mô tả không được để trống',
            'quantities.required'  => 'Số lượng không được để trống',
            'quantities.integer'   => 'Số lượng phải là 1 số',
            'detail.required'      => 'Chi tiết không được để trống',
        ];
    }
}
