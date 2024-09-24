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
            'created_at' => $this->created_at,
        ];
    }
}