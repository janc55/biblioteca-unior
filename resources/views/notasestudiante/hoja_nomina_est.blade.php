<style type="text/css">
    .container h2 , .panel-info{
        margin-top:80px;
        line-height:50px;
    }
</style>    

            
        @foreach($datos as $lista2) 
        <p class="text">DOCENTE: {{ $lista2->grado}} {{ $lista2->docente}} </p>
        <p class="text">MATERIA: {{ $lista2->codigo_mat}} -  {{ $lista2->nombre_mat}}  </p>
        <p class="text">PARALELO: {{ $lista2->paralelo_asig_mat}}</p>
        <p class="text">TURNO: {{ $lista2->desc_turno}}   </p>
        <p class="text">GESTION: {{ $lista2->periodo_gestion}} / {{ $lista2->anio_gestion}}  </p>
        @break
        @endforeach
<br>
            <div class="panel-heading">NOMINA DE ESTUDIANTES</div>
            <br>
            <div class="panel-body"> 
                <table border="1" id="example1" class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Codigo</th>
                            <th>Nombre</th>  
                        </tr>
                    </thead>
                    <tbody>
                    {{ $i=0 }}
                        @foreach($datos as $lista)
                            <tr>
                                <td>
                                 {{ $i++ }}
                                </td>
                                <td>
                                    {{ $lista->cod_est}}
                                </td>
                                <td>
                               {{ $lista->estudiante }}
                                </td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
      

