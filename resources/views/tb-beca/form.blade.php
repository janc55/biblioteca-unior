<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_beca') }}
            {{ Form::text('id_beca', $tbBeca->id_beca, ['class' => 'form-control' . ($errors->has('id_beca') ? ' is-invalid' : ''), 'placeholder' => 'Id Beca']) }}
            {!! $errors->first('id_beca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_beca') }}
            {{ Form::text('nombre_beca', $tbBeca->nombre_beca, ['class' => 'form-control' . ($errors->has('nombre_beca') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Beca']) }}
            {!! $errors->first('nombre_beca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sigla_beca') }}
            {{ Form::text('sigla_beca', $tbBeca->sigla_beca, ['class' => 'form-control' . ($errors->has('sigla_beca') ? ' is-invalid' : ''), 'placeholder' => 'Sigla Beca']) }}
            {!! $errors->first('sigla_beca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habi_beca') }}
            {{ Form::text('habi_beca', $tbBeca->habi_beca, ['class' => 'form-control' . ($errors->has('habi_beca') ? ' is-invalid' : ''), 'placeholder' => 'Habi Beca']) }}
            {!! $errors->first('habi_beca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prom_beca') }}
            {{ Form::text('prom_beca', $tbBeca->prom_beca, ['class' => 'form-control' . ($errors->has('prom_beca') ? ' is-invalid' : ''), 'placeholder' => 'Prom Beca']) }}
            {!! $errors->first('prom_beca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desc_beca') }}
            {{ Form::text('desc_beca', $tbBeca->desc_beca, ['class' => 'form-control' . ($errors->has('desc_beca') ? ' is-invalid' : ''), 'placeholder' => 'Desc Beca']) }}
            {!! $errors->first('desc_beca', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>