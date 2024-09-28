<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title_anotacao' => $this->title_anotacao,
            'conteudo' => $this->conteudo,
            'status' => $this->status,
            'path_anexo' => $this->path_anexo,
            'urgencia' => $this->urgencia,
            'created_at' => $this->created_at,
        ];
    }
}