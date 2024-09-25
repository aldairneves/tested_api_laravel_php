<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSenhasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'instituicao' => ['required', 'max:70'],
            'senha' => ['required'],
            'data_alteracao' => ['required'],
            'motivo' => ['required'],
            'valido' => ['required']
        ];
    }
}