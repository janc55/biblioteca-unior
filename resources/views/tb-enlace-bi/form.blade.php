<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group" hidden>
            {{ Form::label('id_enlib') }}
            {{ Form::text('id_enlib', $tbEnlaceBi->id_enlib, ['class' => 'form-control' . ($errors->has('id_enlib') ? ' is-invalid' : ''), 'placeholder' => 'Id Enlib']) }}
            {!! $errors->first('id_enlib', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dir') }}
            {{ Form::text('dir', $tbEnlaceBi->dir, ['class' => 'form-control' . ($errors->has('dir') ? ' is-invalid' : ''), 'placeholder' => 'Dir']) }}
            {!! $errors->first('dir', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto') }}
         <div hidden>   {{ Form::text('foto', $tbEnlaceBi->foto, ['class' => 'form-control' . ($errors->has('foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
            {!! $errors->first('foto', '<div class="invalid-feedback">:message</div>') !!}
         </div>
            <input type="file" name="img">

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
