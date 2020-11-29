
<div class='form-item'>
    {{ Form::label('inputMDEx','Titulo',['class'=>'text-lg','required']) }}
    {{ Form::text('TITULO',null, ['id'=>'TITULO','class'=>'w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200'.( $errors->has('TITULO') ? ' is-invalid' : '' )]) }}
    
    <div class="invalid-feedback">
        @error('TITULO')
            {{ $message }}
        @enderror
    </div>
</div>
<div class='form-item'>
    {{ Form::label('inputMDEx','Categoria',['class'=>'text-lg','required']) }}
    
        <select 
            id="CATEGORIA"
            name="CATEGORIA"
            class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200"
                        
        >
        @isset($comunicado)
        <option selected hidden>{{$comunicado->CATEGORIA}}</option>
        @endisset    
          <option>Deportes</option>
          <option>Cultura</option>
          <option>Impuestos Municipales</option>
          <option>Obras</option>
          <option>Comunicados</option>
          <option>Varios</option>
        </select>
    <div class="invalid-feedback">
        @error('CATEGORIA')
            {{ $message }}
        @enderror
    </div>
</div>

<div class='form-item'>
    {{ Form::label('inputMDEx','Descripcion',['class'=>'text-lg']) }}
    {{ Form::textarea('DESCRIPCION',null, ['id'=>'DESCRIPCION','class'=>'w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200'.( $errors->has('DESCRIPCION') ? ' is-invalid' : '' ),'rows'=>'2']) }}
    <div class="invalid-feedback">
        @error('DESCRIPCION')
            {{ $message }}
        @enderror
    </div>
</div>
<div class='form-item'>
    {{ Form::label('inputMDEx','Contenido',['class'=>'text-lg']) }}
    {{ Form::textarea('CONTENIDO',null, ['id'=>'CONTENIDO','class'=>'w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200'.( $errors->has('CONTENIDO') ? ' is-invalid' : '' )]) }}
    <div class="invalid-feedback">
        @error('CONTENIDO')
            {{ $message }}
        @enderror
    </div>
</div>

<div class='md-form '>
    <h5 class="text-lg text-bold"]>Estado</h5>
    <!-- Group of default radios - option 1 -->
    <div class="mb-4 ml-5">
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="ESTADO" value="BORRADOR"
        @isset($comunicado)
        {{ $comunicado->ESTADO == 'BORRADOR' ? 'checked' : '' }}
        @endisset checked>
        <label class="custom-control-label" for="defaultGroupExample1">BORRADOR</label>
    </div>
    
    <!-- Group of default radios - option 2 -->
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="ESTADO" value="PUBLICADO"
        @isset($comunicado)
        {{ $comunicado->ESTADO == 'PUBLICADO' ? 'checked' : '' }}
        @endisset>
        <label class="custom-control-label" for="defaultGroupExample2">PUBLICADO</label>
    </div>
</div>
</div>

<div class="custom-control flex flex-col relative items-center">
    <div class="items-center">
        {{ Form::submit('Guardar',['type'=>'button','class' => 'flex items-center p-4 bg-green-400 rounded-lg shadow-xs cursor-pointer hover:bg-green-500 hover:text-gray-100']) }}
    </div>
</div>
@section('scripts')
    <script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>  
    <script>
        CKEDITOR.config.height=400;
        CKEDITOR.config.width='auto';
        CKEDITOR.replace('CONTENIDO');
    </script>
@endsection