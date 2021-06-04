<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
        $user=$this->route('user');

        return [
            'name' => ['required','min:3','max:100'],
            'username'=> ['required','min:3','max:100','unique:users,username,' .$user->id],
            'dni'=> ['required','min:8','max:8'],
            'email'=> ['required','unique:users,email,' .request()->route('user')->id],
            'direccion'=> ['required','min:3','max:150'],
            'password'=> 'sometimes'
        ];
    }
}
