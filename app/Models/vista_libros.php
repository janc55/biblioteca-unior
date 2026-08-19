<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vista_libros extends Model
{
    protected $primaryKey = 'id_libro';
    protected $table="vista_libros";

    use HasFactory;
}
