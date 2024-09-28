<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArquivosRequest extends FormRequest
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
            'title_arquivo' => ['required', 'max:70'],
            'entidade' => ['required'],
            'descricao' => ['required'],
            'path_anexo' => ['max:255']
        ];
    }
}