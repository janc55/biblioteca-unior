<?php

namespace App\Imports;

use App\Models\UsuarioAdministrativo;
use Maatwebsite\Excel\Concerns\ToModel;

class UsuariosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UsuarioAdministrativo([
            'nombre' => $row[0],
            'ci' => $row[1],
            'contrasena' => $row[2],
            'tipo' => $row[3],
        ]);
    }
}
