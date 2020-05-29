
<div class='md-form'>
    {{ Form::text('NOMBRE',null, ['id'=>'NOMBRE','class'=>'form-control']) }}
    {{ Form::label('inputMDEx','Nombre') }}
</div>
<div class='md-form'>
    {{ Form::text('DESCRIPCION',null, ['id'=>'DESCRIPCION','class'=>'form-control']) }}
    {{ Form::label('inputMDEx','Descripcion') }}
</div>
<div class='md-form'>
    {{ Form::text('STOCK',null, ['id'=>'STOCK','class'=>'form-control']) }}
    {{ Form::label('inputMDEx','Cantidad') }}
</div>
<div class='md-form '>
    <h5>Tipo</h5>
    <!-- Group of default radios - option 1 -->
    <div class="mb-4 ml-5">
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" value="MATERIAL DE ESCRITORIO"
        @isset($producto)
        {{ $producto->TIPO == 'MATERIAL DE ESCRITORIO' ? 'checked' : '' }}
        @endisset>
        <label class="custom-control-label" for="defaultGroupExample1">Material de Escritorio</label>
    </div>
    
    <!-- Group of default radios - option 2 -->
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" value="MATERIAL DE LIMPIEZA"
        @isset($producto)
        {{ $producto->TIPO == 'MATERIAL DE LIMPIEZA' ? 'checked' : '' }}
        @endisset>
        <label class="custom-control-label" for="defaultGroupExample2">Material de Limpieza</label>
    </div>
    
    <!-- Group of default radios - option 3 -->
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios" value="ACCESORIO"
        @isset($producto)
        {{ $producto->TIPO == 'ACCESORIO' ? 'checked' : '' }}
        @endisset>
        <label class="custom-control-label" for="defaultGroupExample3">Accesorio</label>
    </div>
</div>
</div>

<div class="form-group">
    {{ Form::submit('Guardar',['type'=>'button','class' => 'btn btn-success']) }}
</div>