<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chaves extends Model
{
    use HasFactory;

    protected $fillable = [

            'plataforma',
            'email',

            'codigo1',
            'codigo1_used',
            'reason1_use',
            'date_used_1',

            'codigo2',
            'codigo2_used',
            'reason2_use',
            'date_used_2',

            'codigo3',
            'codigo3_used',
            'reason3_use',
            'date_used_3',

            'codigo4',
            'codigo4_used',
            'reason4_use',
            'date_used_4',

            'codigo5',
            'codigo5_used',
            'reason5_use',
            'date_used_5',

            'codigo6',
            'codigo6_used',
            'reason6_use',
            'date_used_6',

            'codigo7',
            'codigo7_used',
            'reason7_use',
            'date_used_7',

            'codigo8',
            'codigo8_used',
            'reason8_use',
            'date_used_8',

            'codigo9',
            'codigo9_used',
            'reason9_use',
            'date_used_9',

            'codigo10',
            'codigo10_used',
            'reason10_use',
            'date_used_10',

            'codigo11',
            'codigo11_used',
            'reason11_use',
            'date_used_11',

            'codigo12',
            'codigo12_used',
            'reason12_use',
            'date_used_12',

            'codigo13',
            'codigo13_used',
            'reason13_use',
            'date_used_13',

            'codigo14',
            'codigo14_used',
            'reason14_use',
            'date_used_14',

            'path_anexo',
            'valido',
            'date_generation',
            'date_closing'
        ];
}
