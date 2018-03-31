<!-- Nombre Field -->
<div class="form-group col-sm-12 col-md-6">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('modelo.index') !!}" class="btn btn-default">Cancelar</a>
</div>
