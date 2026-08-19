<div class="box box-info padding-1">
    <div class="box-body">       
               
        <div class="form-group">
          <label class="form-control">Carrera</label>
           <select name="id_carre" id="id_carre" class="form-control">
           @foreach ($tbCarrera as $tbCarrera2)
                <option value="{{ $tbCarrera2->id_carre}}">                      
				        <td> {{ $tbCarrera2->sigla_carre}} - {{ $tbCarrera2->nombre_carre}}</td>
                </option> 
                <div class="invalid-feedback">:message</div>
            @endforeach
           </select>         
        </div>  

        <div class="form-group">
          <label class="form-control">Materia</label>
           <select name="id_materia" id="id_materia" class="form-control">
           @foreach ($tbMateria as $tbMateria)
                <option value="{{ $tbMateria->id_materia}}">                      
				        <td> {{ $tbMateria->codigo_mat}} {{ $tbMateria->nombre_mat}}</td>
                </option> 
                <div class="invalid-feedback">:message</div>
            @endforeach
           </select>        
        </div>

        <div class="form-group">
          <label class="form-control">Semestre</label>
           <select name="id_sem" id="id_sem" class="form-control">
           @foreach ($tbSemestre as $tbSemestre)
                <option value="{{ $tbSemestre->id_sem}}">                      
				        <td> {{ $tbSemestre->numero}} - {{ $tbSemestre->desc_sem}}</td>
                </option> 
                <div class="invalid-feedback">:message</div>
            @endforeach
           </select>        
        </div>     
        <div class="form-group">
            <label class="form-control">Cred materia</label>
            <input type="number"  name="cred_materia" id="cred_materia"   class="form-control bi bi-0-square-fill" placeholder="">
            <div class="invalid-feedback">:message</div>
        </div>   
        <div class="form-group">
            <label class="form-control">HT materia</label>
            <input type="number"  name="ht_materia" id="ht_materia"   class="form-control bi bi-0-square-fill" placeholder="">
            <div class="invalid-feedback">:message</div>
        </div>   
        <div class="form-group">
            <label class="form-control">HP materia</label>
            <input type="number"  name="hp_materia" id="hp_materia"   class="form-control bi bi-0-square-fill" placeholder="">
            <div class="invalid-feedback">:message</div>
        </div>   
        <div class="form-group">
            <label class="form-control">TSE materia</label>
            <input type="number"  name="tse_materia" id="tse_materia"   class="form-control bi bi-0-square-fill" placeholder="">
            <div class="invalid-feedback">:message</div>
        </div>      
       
       
        <div class="form-group">
          <label class="form-control">Plan de Gestión</label>
           <select name="id_planE" id="id_planE" class="form-control">
           @foreach ($tb_planesgestiones as $tb_planesgestiones)
                <option value="{{ $tb_planesgestiones->id_planE}}">                      
				        <td> {{ $tb_planesgestiones->id_planE}}</td>
                </option> 
                <div class="invalid-feedback">:message</div>
            @endforeach
           </select>        
        </div>           

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>