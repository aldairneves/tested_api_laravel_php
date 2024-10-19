<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senhas extends Model
{
    use HasFactory;

    protected $fillable = [
        'plataforma',
        'email',
        'senha',
        'email_recovery',
        'date_generation',
        'senha_valido',
        'senha_alterada',
        'motivo',
        'data_alteracao',
        'chaves_id'];

    public function chaves()
    {
        return $this->belongsTo(Chaves::class);
    }
}
