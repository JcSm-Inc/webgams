

<div class="flex flex-col mb-6">
    {{ Form::label('inputMDEx','Cantidad',['class'=>'mb-1 text-xs sm:text-sm tracking-wide text-gray-600']) }}
    <div class="relative">
        {{ Form::text('CANTIDAD',null, ['id'=>'CANTIDAD','class'=>'text-sm sm:text-base placeholder-gray-500 pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400'.( $errors->has('CANTIDAD') ? ' is-invalid' : '' )]) }}
        <div class="invalid-feedback">
            @error('CANTIDAD')
                {{ $message }}
            @enderror
        </div>
    </div>
    {{ Form::label('inputMDEx','Precio Unitario',['class'=>'mb-1 text-xs sm:text-sm tracking-wide text-gray-600']) }}
    <div class="relative">
        {{Form::text('PU',null, ['id'=>'PU','class'=>'text-sm sm:text-base placeholder-gray-500 pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400'.( $errors->has('PU') ? ' is-invalid' : '' )]) }}
        <div class="invalid-feedback">
            @error('PU')
                {{ $message }}
            @enderror
        </div>
    </div>
    {{ Form::label('inputMDEx','PROVEEDOR',['class'=>'mb-1 text-xs sm:text-sm tracking-wide text-gray-600']) }}
    <div class="relative">
        {{Form::text('PROVEEDOR',null, ['id'=>'PU','class'=>'text-sm sm:text-base placeholder-gray-500 pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400'.( $errors->has('PROVEEDOR') ? ' is-invalid' : '' )]) }}
        <div class="invalid-feedback">
            @error('PROVEEDOR')
                {{ $message }}
            @enderror
        </div>
    </div>
    {{ Form::label('inputMDEx','Nro. de Documento',['class'=>'mb-1 text-xs sm:text-sm tracking-wide text-gray-600']) }}
    <div class="relative">
        {{Form::text('NRO_DOCUMENTO',null, ['id'=>'PU','class'=>'text-sm sm:text-base placeholder-gray-500 pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400'.( $errors->has('NRO_DOCUMENTO') ? ' is-invalid' : '' )]) }}
        <div class="invalid-feedback">
            @error('NRO_DOCUMENTO')
                {{ $message }}
            @enderror
        </div>
    </div>

  </div>
  <div class="flex w-full">
    <button type="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-green-600 hover:bg-green-800 rounded py-2 w-full transition duration-150 ease-in">
      <span class="mr-2 ">Guardar</span>
      <span class="text-white">
        <i class="far fa-save"></i>
      </span>
    </button>
  </div>
