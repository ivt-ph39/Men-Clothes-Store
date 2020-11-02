<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'max:30'],
        ];

    }
    public function messages(){
        return [
            'name.required'        => 'Tên không được để trống',
            'name.unique'          => 'Tên đã tồn tại',
            'email.required'       => 'Email không được để trống',
            'email.email'          => 'Không đúng định dạng email',
            'email.unique'         => 'Email đã tồn tại',
            'password.required'    => 'Password không được để trống',
            'password.min'         => 'Password tối thiểu 6 ký tự',
            'password.max'         => 'Password tối đa 30 ký tự',
        ];
    }
}
