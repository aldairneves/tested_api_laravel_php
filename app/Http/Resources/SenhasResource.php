<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SenhasResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'instituicao' => $this->instituicao,
            'senha' => $this->senha,
            'data_alteracao' => $this->data_alteracao,
            'motivo' => $this->motivo,
            'valido' => $this->valido,
            'created_at' => $this->created_at,
        ];
    }
}
