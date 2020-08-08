<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPassword extends FormRequest
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
            //
            'password_old'=>'required',
            'password' => 'required',
            'pw_confirm' => 'required|same:password' ,
        ];
    }
    public function messages(){
        return [
            'password_old.required' => 'Trường này không được để trống',
            'password.required' => 'Trường này không được để trống',
            'pw_confirm.required' => 'Trường này không được để trống',
            'pw_confirm.same' => 'Mật khẩu xác nhận không đúng',
        ];
    }
}
