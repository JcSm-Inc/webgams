
<div class='md-form'>
    {{ Form::text('NOMBRE',null, ['id'=>'NOMBRE','class'=>'form-control']) }}
    {{ Form::label('inputMDEx','Nombre') }}
</div>
<div class='md-form'>
    {{ Form::text('DESCRIPCION',null, ['id'=>'DESCRIPCION','class'=>'form-control']) }}
    {{ Form::label('inputMDEx','Descripcion') }}
</div>
    <select class="mdb-select md-form colorful-select dropdown-primary">
        <option value="1">Material de Escritorio</option>
        <option value="2">Material de Limpieza</option>
        <option value="3">Accesorios</option>
    </select>
<div class='md-form'>
    {{ Form::text('STOCK',null, ['id'=>'STOCK','class'=>'form-control']) }}
    {{ Form::label('inputMDEx','Stock') }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar',['type'=>'button','class' => 'btn btn-primary']) }}
</div>