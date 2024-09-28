<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArquivosResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title_arquivo' => $this->title_arquivo,
            'entidade' => $this->entidade,
            'descricao' => $this->descricao,
            'path_anexo' => $this->path_anexo,
            'created_at' => $this->created_at,
        ];
    }
}
