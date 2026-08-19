<div class="box box-info padding-1">
    <div class="box-body">
        
        <!-- <div class="form-group">
            {{ Form::label('id_prerreq') }}
            {{ Form::text('id_prerreq', $tbPrerrequisito->id_prerreq, ['class' => 'form-control' . ($errors->has('id_prerreq') ? ' is-invalid' : ''), 'placeholder' => 'Id Prerreq']) }}
            {!! $errors->first('id_prerreq', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->

        <div class="form-group">
          <label class="form-control">Materia</label>
           <select name="id_carre_mater" id="id_carre_mater" class="form-control">
           @foreach ($tbCarreMateria as $tbCarreMateria)
                <option value="{{ $tbCarreMateria->id_carre_mater}}">                      
				        <td> {{ $tbCarreMateria->codigo_mat}} {{ $tbCarreMateria->nombre_mat}}</td>
                </option> 
                <div class="invalid-feedback">:message</div>
            @endforeach
           </select>

        
        </div>

        <div class="form-group">
          <label class="form-control">Prerrequisito 1</label>
           <select name="id_materia" id="id_materia" class="form-control">
           @foreach ($tbMateria as $tbMateria1)
                <option value="{{ $tbMateria1->id_materia}}">                      
				        <td> {{ $tbMateria1->codigo_mat}} {{ $tbMateria1->nombre_mat}}</td>
                </option> 
                <div class="invalid-feedback">:message</div>
            @endforeach
           </select>
        </div>

        <div class="form-group">
          <label class="form-control">Prerrequisito 2</label>
           <select name="id_materia2" id="id_materia2" class="form-control">
                <option value="0">                      
				        <td> Sin Prerrequisito</td>
                </option> 
                <div class="invalid-feedback">:message</div>
           @foreach ($tbMateria as $tbMateria2)
                <option value="{{ $tbMateria2->id_materia}}">                      
				        <td> {{ $tbMateria2->codigo_mat}} {{ $tbMateria2->nombre_mat}}</td>
                </option> 
                <div class="invalid-feedback">:message</div>
            @endforeach
           </select>
        </div>

        <div class="form-group">
          <label class="form-control">Prerrequisito 3</label>
           <select name="id_materia3" id="id_materia3" class="form-control">
           <option value="0">                      
				        <td> Sin Prerrequisito</td>
                </option> 
                <div class="invalid-feedback">:message</div>
           @foreach ($tbMateria as $tbMateria3)
                <option value="{{ $tbMateria3->id_materia}}">                      
				        <td> {{ $tbMateria3->codigo_mat}} {{ $tbMateria3->nombre_mat}}</td>
                </option> 
                <div class="invalid-feedback">:message</div>
            @endforeach
           </select>
        </div>

        <div class="form-group">
          <label class="form-control">Prerrequisito 4</label>
           <select name="id_materia4" id="id_materia4" class="form-control">
                <option value="0">                      
				        <td> Sin Prerrequisito</td>
                </option> 
                <div class="invalid-feedback">:message</div>
           @foreach ($tbMateria as $tbMateria4)
                <option value="{{ $tbMateria4->id_materia}}">                      
				        <td> {{ $tbMateria4->codigo_mat}} {{ $tbMateria4->nombre_mat}}</td>
                </option> 
                <div class="invalid-feedback">:message</div>
            @endforeach
           </select>
        </div>

        <div class="form-group">
          <label class="form-control">Prerrequisito 5</label>
           <select name="id_materia5" id="id_materia5" class="form-control">
                <option value="0">                      
				        <td> Sin Prerrequisito</td>
                </option> 
                <div class="invalid-feedback">:message</div>
           @foreach ($tbMateria as $tbMateria5)
                <option value="{{ $tbMateria5->id_materia}}">                      
				        <td> {{ $tbMateria5->codigo_mat}} {{ $tbMateria5->nombre_mat}}</td>
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