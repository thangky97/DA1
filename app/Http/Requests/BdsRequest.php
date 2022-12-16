<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BdsRequest extends FormRequest
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
        $rules = [];
        //Lấy ra tên phương thức đang hoạt động
        $currentAction = $this->route()->getActionMethod();
        //dd($currentAction);
        switch ($this->method()):
            case 'post':
                switch ($currentAction) {
                    case 'add':
                        $rules = [
                            'name' => 'required',
                            'email' => 'required|unique:users',
                            'password' => 'required',
                        ];
                        break;
                    default:
                        break;
                }
                break;
                default:
                break;
        endswitch;

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Bắt buộc nhập name',
            'email.required' => 'Bắt buộc nhập email',
            'email.unique' => 'Email đã tồn tại',
        ];
    }
}
