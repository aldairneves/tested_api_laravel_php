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
            'plataforma' => $this->plataforma,
            'email' => $this->email,
            'senha' => $this->senha,
            'email_recovery'  => $this->email_recovery,
            'date_generation' => $this->date_generation,
            'senha_valido' => $this->senha_valido,
            'senha_alterada' => $this->senha_alterada,
            'motivo' => $this->motivo,
            'data_alteracao' => $this->data_alteracao,
            'created_at' => $this->created_at,
        ];
    }
}
