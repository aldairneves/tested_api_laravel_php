<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arquivos extends Model
{
    use HasFactory;

    protected $fillable = ['title_arquivo', 'entidade', 'descricao', 'path_anexo'];
}
