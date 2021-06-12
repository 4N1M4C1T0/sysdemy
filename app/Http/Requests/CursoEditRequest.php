<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoEditRequest extends FormRequest
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
            'nombre_curso' => 'required|min:3|max:100',
            'biografia_curso'=> 'required|min:3|max:100',
            'precio'=> 'required',
            'imagen'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
