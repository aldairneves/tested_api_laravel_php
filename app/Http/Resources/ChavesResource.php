<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChavesResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'plataforma' => $this->plataforma,
            'email' => $this->email,

            'codigo1' => $this->codigo1,
            'codigo1_used' => $this->codigo1_used,
            'reason1_use' => $this->reason1_use,
            'date_used_1' => $this->date_used_1,

            'codigo2' => $this->codigo2,
            'codigo2_used' => $this->codigo2_used,
            'reason2_use' => $this->reason2_use,
            'date_used_2' => $this->date_used_2,

            'codigo3' => $this->codigo3,
            'codigo3_used' => $this->codigo3_used,
            'reason3_use' => $this->reason3_use,
            'date_used_3' => $this->date_used_3,

            'codigo4' => $this->codigo4,
            'codigo4_used' => $this->codigo4_used,
            'reason4_use' => $this->reason4_use,
            'date_used_4' => $this->date_used_4,

            'codigo5' => $this->codigo5,
            'codigo5_used' => $this->codigo5_used,
            'reason5_use' => $this->reason5_use,
            'date_used_5' => $this->date_used_5,

            'codigo6' => $this->codigo6,
            'codigo6_used' => $this->codigo6_used,
            'reason6_use' => $this->reason6_use,
            'date_used_6' => $this->date_used_6,

            'codigo7' => $this->codigo7,
            'codigo7_used' => $this->codigo7_used,
            'reason7_use' => $this->reason7_use,
            'date_used_7' => $this->date_used_7,

            'codigo8' => $this->codigo8,
            'codigo8_used' => $this->codigo8_used,
            'reason8_use' => $this->reason8_use,
            'date_used_8' => $this->date_used_8,

            'codigo9' => $this->codigo9,
            'codigo9_used' => $this->codigo9_used,
            'reason9_use' => $this->reason9_use,
            'date_used_9' => $this->date_used_9,

            'codigo10' => $this->codigo10,
            'codigo10_used' => $this->codigo10_used,
            'reason10_use' => $this->reason10_use,
            'date_used_10' => $this->date_used_10,

            'codigo11' => $this->codigo11,
            'codigo11_used' => $this->codigo11_used,
            'reason11_use' => $this->reason11_use,
            'date_used_11' => $this->date_used_11,

            'codigo12' => $this->codigo12,
            'codigo12_used' => $this->codigo12_used,
            'reason12_use' => $this->reason12_use,
            'date_used_12' => $this->date_used_12,

            'codigo13' => $this->codigo13,
            'codigo13_used' => $this->codigo13_used,
            'reason13_use' => $this->reason13_use,
            'date_used_13' => $this->date_used_13,

            'codigo14' => $this->codigo14,
            'codigo14_used' => $this->codigo14_used,
            'reason14_use' => $this->reason14_use,
            'date_used_14' => $this->date_used_14,

            'path_anexo' => $this->path_anexo,
            'valido' => $this->valido,
            'date_generation' => $this->date_generation,
            'date_closing' => $this->date_closing,

            'created_at' => $this->created_at,
        ];
    }
}
