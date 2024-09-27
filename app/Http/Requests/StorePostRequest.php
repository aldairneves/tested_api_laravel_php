<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title_anotacao' => ['required', 'max:70'],
            'conteudo' => ['required'],
            'status' => ['required'],
            'urgencia' => ['required']
        ];
    }
}
