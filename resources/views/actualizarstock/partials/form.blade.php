


<div class='md-form'>
    {{ Form::text('STOCK',null, ['id'=>'STOCK','class'=>'form-control'.( $errors->has('STOCK') ? ' is-invalid' : '' )]) }}
    {{ Form::label('inputMDEx','Cantidad') }}
    <div class="invalid-feedback">
        @error('STOCK')
            {{ $message }}
        @enderror
    </div>
</div>
<div class='md-form'>
    {{ Form::text('PU',null, ['id'=>'PU','class'=>'form-control']) }}
    {{ Form::label('inputMDEx','PU') }}
</div>
<div class='md-form'>
    {{ Form::text('PROVEEDOR',null, ['id'=>'NOMBRE','class'=>'form-control'.( $errors->has('PROVEEDOR') ? ' is-invalid' : '' )]) }}
    {{ Form::label('inputMDEx','Proveedor',['required']) }}
    <div class="invalid-feedback">
        @error('proveedor')
            {{ $message }}
        @enderror
    </div>
</div>
<div class='md-form'>
    {{ Form::text('NRO_DOCUMENTO',null, ['id'=>'NRO_DOCUMENTO','class'=>'form-control'.( $errors->has('NRO_DOCUMENTO') ? ' is-invalid' : '' )]) }}
    {{ Form::label('inputMDEx','Nro de Documento',['required']) }}
    <div class="invalid-feedback">
        @error('proveedor')
            {{ $message }}
        @enderror
    </div>
</div>



<div class="form-group">
    {{ Form::submit('Guardar',['type'=>'button','class' => 'btn btn-success']) }}
</div>