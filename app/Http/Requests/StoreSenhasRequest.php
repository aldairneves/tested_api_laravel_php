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
            'plataforma' => ['required', 'max:70'],
            'email' => ['max:70'],
            'senha' => ['max:70'],
            'email_recovery' => ['max:70'],
            'date_generation' => ['max:70'],
            'senha_valido' => ['max:225'],
            'senha_alterada' => ['max:70'],
            'motivo' => ['max:70'],
            'data_alteracao' => ['max:70'],
            'chaves_id' => ['max:70'],

        ];
    }
}
