<div class='md-form'>
    {{ Form::text('NOMBRE',null, ['id'=>'REFERENCIA','class'=>'form-control'.( $errors->has('REFERENCIA') ? ' is-invalid' : '' )]) }}
    {{ Form::label('inputMDEx','Referencia',['required']) }}
    <div class="invalid-feedback">
        @error('REFERENCIA')
            {{ $message }}
        @enderror
    </div>
</div>

    <div class='md-form'>
        {{ Form::text('DESTINATARIO',null, ['id'=>'DESTINATARIO','class'=>'form-control']) }}
        {{ Form::label('inputMDEx','Destinatario') }}
    </div>
    <div class='md-form'>
        {{ Form::text('NROHOJAS',null, ['id'=>'NROHOJAS','class'=>'form-control'.( $errors->has('NROHOJAS') ? ' is-invalid' : '' )]) }}
        {{ Form::label('inputMDEx','Nro de Hojas') }}
        <div class="invalid-feedback">
            @error('NROHOJAS')
                {{ $message }}
            @enderror
        </div>
    </div>
    <div class="md-form">
        <input  type="file" name="DIRECCION">
    </div>
<div class="form-group">
    {{ Form::submit('Guardar',['type'=>'button','class' => 'btn btn-success']) }}
</div>