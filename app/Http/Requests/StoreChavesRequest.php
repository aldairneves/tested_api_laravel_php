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
            'plataforma' => ['required', 'max:70'],

            'codigo1' => ['max:255'],
            'codigo1_used' => ['max:255'],
            'reason1_use' => ['max:255'],
            'date_used_1' => ['max:255'],

            'codigo2' => ['max:255'],
            'codigo2_used' => ['max:255'],
            'reason2_use' => ['max:255'],
            'date_used_2' => ['max:255'],

            'codigo3' => ['max:255'],
            'codigo3_used' => ['max:255'],
            'reason3_use' => ['max:255'],
            'date_used_3' => ['max:255'],

            'codigo4' => ['max:255'],
            'codigo4_used' => ['max:255'],
            'reason4_use' => ['max:255'],
            'date_used_4' => ['max:255'],

            'codigo5' => ['max:255'],
            'codigo5_used' => ['max:255'],
            'reason5_use' => ['max:255'],
            'date_used_5' => ['max:255'],

            'codigo6' => ['max:255'],
            'codigo6_used' => ['max:255'],
            'reason6_use' => ['max:255'],
            'date_used_6' => ['max:255'],

            'codigo7' => ['max:255'],
            'codigo7_used' => ['max:255'],
            'reason7_use' => ['max:255'],
            'date_used_7' => ['max:255'],

            'codigo8' => ['max:255'],
            'codigo8_used' => ['max:255'],
            'reason8_use' => ['max:255'],
            'date_used_8' => ['max:255'],

            'codigo9' => ['max:255'],
            'codigo9_used' => ['max:255'],
            'reason9_use' => ['max:255'],
            'date_used_9' => ['max:255'],

            'codigo10' => ['max:255'],
            'codigo10_used' => ['max:255'],
            'reason10_use' => ['max:255'],
            'date_used_10' => ['max:255'],

            'codigo11' => ['max:255'],
            'codigo11_used' => ['max:255'],
            'reason11_use' => ['max:255'],
            'date_used_11' => ['max:255'],

            'codigo12' => ['max:255'],
            'codigo12_used' => ['max:255'],
            'reason12_use' => ['max:255'],
            'date_used_12' => ['max:255'],

            'codigo13' => ['max:255'],
            'codigo13_used' => ['max:255'],
            'reason13_use' => ['max:255'],
            'date_used_13' => ['max:255'],

            'codigo14' => ['max:255'],
            'codigo14_used' => ['max:255'],
            'reason14_use' => ['max:255'],
            'date_used_14' => ['max:255'],

            'path_anexo' => ['max:255'],
            'valido' => ['max:255'],
            'date_generation' => ['max:255'],
            'date_closing' => ['max:255'],
        ];
    }
}
