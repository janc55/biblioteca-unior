<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_planesgestiones extends Model
{
    protected $table = "tb_planes";
    protected $primaryKey = 'id_planE';
    use HasFactory;
}
