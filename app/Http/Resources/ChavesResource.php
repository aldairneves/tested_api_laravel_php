<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChavesResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'instituicao' => $this->instituicao,
            'codigo' => $this->codigo,
            'codigo_used' => $this->codigo_used,
            'reason_use' => $this->reason_use,
            'data_alteracao' => $this->data_alteracao,
            'valido' => $this->valido,
            'created_at' => $this->created_at,
        ];
    }
}
