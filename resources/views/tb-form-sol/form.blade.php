<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_formsol') }}
            {{ Form::text('id_formsol', $tbFormSol->id_formsol, ['class' => 'form-control' . ($errors->has('id_formsol') ? ' is-invalid' : ''), 'placeholder' => 'Id Formsol']) }}
            {!! $errors->first('id_formsol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_us') }}
            {{ Form::text('id_us', $tbFormSol->id_us, ['class' => 'form-control' . ($errors->has('id_us') ? ' is-invalid' : ''), 'placeholder' => 'Id Us']) }}
            {!! $errors->first('id_us', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gci') }}
            {{ Form::text('gci', $tbFormSol->gci, ['class' => 'form-control' . ($errors->has('gci') ? ' is-invalid' : ''), 'placeholder' => 'Gci']) }}
            {!! $errors->first('gci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gcre') }}
            {{ Form::text('gcre', $tbFormSol->gcre, ['class' => 'form-control' . ($errors->has('gcre') ? ' is-invalid' : ''), 'placeholder' => 'Gcre']) }}
            {!! $errors->first('gcre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activi') }}
            {{ Form::text('activi', $tbFormSol->activi, ['class' => 'form-control' . ($errors->has('activi') ? ' is-invalid' : ''), 'placeholder' => 'Activi']) }}
            {!! $errors->first('activi', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('des1') }}
            {{ Form::text('des1', $tbFormSol->des1, ['class' => 'form-control' . ($errors->has('des1') ? ' is-invalid' : ''), 'placeholder' => 'Des1']) }}
            {!! $errors->first('des1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('des2') }}
            {{ Form::text('des2', $tbFormSol->des2, ['class' => 'form-control' . ($errors->has('des2') ? ' is-invalid' : ''), 'placeholder' => 'Des2']) }}
            {!! $errors->first('des2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('des3') }}
            {{ Form::text('des3', $tbFormSol->des3, ['class' => 'form-control' . ($errors->has('des3') ? ' is-invalid' : ''), 'placeholder' => 'Des3']) }}
            {!! $errors->first('des3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('des4') }}
            {{ Form::text('des4', $tbFormSol->des4, ['class' => 'form-control' . ($errors->has('des4') ? ' is-invalid' : ''), 'placeholder' => 'Des4']) }}
            {!! $errors->first('des4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant1') }}
            {{ Form::text('cant1', $tbFormSol->cant1, ['class' => 'form-control' . ($errors->has('cant1') ? ' is-invalid' : ''), 'placeholder' => 'Cant1']) }}
            {!! $errors->first('cant1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant2') }}
            {{ Form::text('cant2', $tbFormSol->cant2, ['class' => 'form-control' . ($errors->has('cant2') ? ' is-invalid' : ''), 'placeholder' => 'Cant2']) }}
            {!! $errors->first('cant2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant3') }}
            {{ Form::text('cant3', $tbFormSol->cant3, ['class' => 'form-control' . ($errors->has('cant3') ? ' is-invalid' : ''), 'placeholder' => 'Cant3']) }}
            {!! $errors->first('cant3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant4') }}
            {{ Form::text('cant4', $tbFormSol->cant4, ['class' => 'form-control' . ($errors->has('cant4') ? ' is-invalid' : ''), 'placeholder' => 'Cant4']) }}
            {!! $errors->first('cant4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod1') }}
            {{ Form::text('cod1', $tbFormSol->cod1, ['class' => 'form-control' . ($errors->has('cod1') ? ' is-invalid' : ''), 'placeholder' => 'Cod1']) }}
            {!! $errors->first('cod1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod2') }}
            {{ Form::text('cod2', $tbFormSol->cod2, ['class' => 'form-control' . ($errors->has('cod2') ? ' is-invalid' : ''), 'placeholder' => 'Cod2']) }}
            {!! $errors->first('cod2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod3') }}
            {{ Form::text('cod3', $tbFormSol->cod3, ['class' => 'form-control' . ($errors->has('cod3') ? ' is-invalid' : ''), 'placeholder' => 'Cod3']) }}
            {!! $errors->first('cod3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod4') }}
            {{ Form::text('cod4', $tbFormSol->cod4, ['class' => 'form-control' . ($errors->has('cod4') ? ' is-invalid' : ''), 'placeholder' => 'Cod4']) }}
            {!! $errors->first('cod4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obs1') }}
            {{ Form::text('obs1', $tbFormSol->obs1, ['class' => 'form-control' . ($errors->has('obs1') ? ' is-invalid' : ''), 'placeholder' => 'Obs1']) }}
            {!! $errors->first('obs1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obs2') }}
            {{ Form::text('obs2', $tbFormSol->obs2, ['class' => 'form-control' . ($errors->has('obs2') ? ' is-invalid' : ''), 'placeholder' => 'Obs2']) }}
            {!! $errors->first('obs2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obs3') }}
            {{ Form::text('obs3', $tbFormSol->obs3, ['class' => 'form-control' . ($errors->has('obs3') ? ' is-invalid' : ''), 'placeholder' => 'Obs3']) }}
            {!! $errors->first('obs3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obs4') }}
            {{ Form::text('obs4', $tbFormSol->obs4, ['class' => 'form-control' . ($errors->has('obs4') ? ' is-invalid' : ''), 'placeholder' => 'Obs4']) }}
            {!! $errors->first('obs4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_sa') }}
            {{ Form::text('fec_sa', $tbFormSol->fec_sa, ['class' => 'form-control' . ($errors->has('fec_sa') ? ' is-invalid' : ''), 'placeholder' => 'Fec Sa']) }}
            {!! $errors->first('fec_sa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_sa') }}
            {{ Form::text('hora_sa', $tbFormSol->hora_sa, ['class' => 'form-control' . ($errors->has('hora_sa') ? ' is-invalid' : ''), 'placeholder' => 'Hora Sa']) }}
            {!! $errors->first('hora_sa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estsa') }}
            {{ Form::text('estsa', $tbFormSol->estsa, ['class' => 'form-control' . ($errors->has('estsa') ? ' is-invalid' : ''), 'placeholder' => 'Estsa']) }}
            {!! $errors->first('estsa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_de') }}
            {{ Form::text('fec_de', $tbFormSol->fec_de, ['class' => 'form-control' . ($errors->has('fec_de') ? ' is-invalid' : ''), 'placeholder' => 'Fec De']) }}
            {!! $errors->first('fec_de', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_de') }}
            {{ Form::text('hora_de', $tbFormSol->hora_de, ['class' => 'form-control' . ($errors->has('hora_de') ? ' is-invalid' : ''), 'placeholder' => 'Hora De']) }}
            {!! $errors->first('hora_de', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estde') }}
            {{ Form::text('estde', $tbFormSol->estde, ['class' => 'form-control' . ($errors->has('estde') ? ' is-invalid' : ''), 'placeholder' => 'Estde']) }}
            {!! $errors->first('estde', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('estado') }}
    {{ Form::select('estado', ['sin atender' => 'Sin Atender', 'atendido' => 'Atendido'], $tbFormSol->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}
    {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
</div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  <!-- /.content -->
  </div>







<!-- /.row -->



    <!-- /.card -->
  </section>
  <!-- /.Left col -->
  <!-- right col (We are only adding the ID to make the widgets sortable)-->



<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
  </div>
  <strong>Copyright &copy; 2014-2021 <a href="https://softwaresit.com">SOFTWARESIT</a>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->












</body>
</html>
