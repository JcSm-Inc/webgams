


<div class='md-form'>
    {{ Form::text('CANTIDAD',null, ['id'=>'CANTIDAD','class'=>'form-control'.( $errors->has('CANTIDAD') ? ' is-invalid' : '' )]) }}
    {{ Form::label('inputMDEx','Cantidad') }}
    <div class="invalid-feedback">
        @error('CANTIDAD')
            {{ $message }}
        @enderror
    </div>
</div>
<div class='md-form'>
    {{ Form::text('PU',null, ['id'=>'PU','class'=>'form-control'.( $errors->has('PU') ? ' is-invalid' : '' )]) }}
    {{ Form::label('inputMDEx','Precio Unitario') }}
    <div class="invalid-feedback">
        @error('PU')
            {{ $message }}
        @enderror
    </div>
</div>
<div class='md-form'>
    {{ Form::text('PROVEEDOR',null, ['id'=>'PROVEEDOR','class'=>'form-control'.( $errors->has('PROVEEDOR') ? ' is-invalid' : '' )]) }}
    {{ Form::label('inputMDEx','PROVEEDOR',['required']) }}
    <div class="invalid-feedback">
        @error('PROVEEDOR')
            {{ $message }}
        @enderror
    </div>
</div>
<div class='md-form'>
    {{ Form::text('NRO_DOCUMENTO',null, ['id'=>'NRO_DOCUMENTO','class'=>'form-control'.( $errors->has('NRO_DOCUMENTO') ? ' is-invalid' : '' )]) }}
    {{ Form::label('inputMDEx','Nro de Documento',['required']) }}
    <div class="invalid-feedback">
        @error('NRO_DOCUMENTO')
            {{ $message }}
        @enderror
    </div>
</div>


<div class="justify-content-center">
    <div class="form-group">
        {{ Form::submit('Guardar',['type'=>'button','class' => 'btn btn-success']) }}
    </div>
</div>