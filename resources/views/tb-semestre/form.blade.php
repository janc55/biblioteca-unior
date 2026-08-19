<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_sem') }}
            {{ Form::text('id_sem', $tbSemestre->id_sem, ['class' => 'form-control' . ($errors->has('id_sem') ? ' is-invalid' : ''), 'placeholder' => 'Id Sem']) }}
            {!! $errors->first('id_sem', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $tbSemestre->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desc_sem') }}
            {{ Form::text('desc_sem', $tbSemestre->desc_sem, ['class' => 'form-control' . ($errors->has('desc_sem') ? ' is-invalid' : ''), 'placeholder' => 'Desc Sem']) }}
            {!! $errors->first('desc_sem', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>