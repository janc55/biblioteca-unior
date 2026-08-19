<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginRegistro extends Model
{
    protected $table = "login_registros";
    protected $fillable = [
        'user_id',
        'fecha_hora',
        'ip',
        // Otros campos que desees registrar
    ];
    use HasFactory;
}
