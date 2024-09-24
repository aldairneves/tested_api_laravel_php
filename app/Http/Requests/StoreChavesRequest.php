<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChavesRequest extends FormRequest
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
            'codigo' => ['required'],
            'codigo_used' => ['required'],
            'reason_use' => ['required'],
            'data_alteracao' => ['required'],
            'valido' => ['required']
        ];
    }
}
