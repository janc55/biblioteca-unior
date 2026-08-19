<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vista_estadistica_tl extends Model
{
    protected $table="vista_estadistica_tl";
    protected $fillable = ['tl_libros', 'tl_tess', 'tl_digital', 'tl_virtual', 'tl_pendidente', 'tl_entregado', 'tl_devuelto', 'tl_rechazado', 'tl_perdido'];

    use HasFactory;
}
