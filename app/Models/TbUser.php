<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbUser extends Model
{
    protected $table = 'tb_users';
    protected $fillable = [
        'tipo',
        'id_tb',
        'rool',
        'estado',
        'created_at',
        'updated_at',
    ];
    use HasFactory;
}
