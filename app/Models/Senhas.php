<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senhas extends Model
{
    use HasFactory;

    protected $fillable = ['instituicao', 'senha', 'data_alteracao', 'motivo', 'valido'];
}
