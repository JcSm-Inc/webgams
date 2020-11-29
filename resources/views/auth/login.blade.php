@extends('layouts.sidebar')

@section('contenido')

<!-- component -->
<!-- This is an example component -->
<div class="h-screen font-sans">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
          <div class="leading-loose">
            <form  class="max-w-sm m-4 p-10 bg-green-800 bg-opacity-40 rounded shadow-xl" method="POST" action="{{ route('login') }}">
                @csrf
                <p class="text-white font-medium text-center text-lg font-bold">ACCEDER</p>
                  <div class="">
                    <label class="block text-sm text-white" for="email">E-mail o Nick</label>
                    <input  class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white @error('email') is-invalid @enderror" id="login" name="login"  placeholder="Ingrese su email o su nickname" value="{{ old('login') }}" required autocomplete="login" autofocus>
                    @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                  <div class="mt-2">
                    <label class="block  text-sm text-white">Contraseña</label>
                     <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white @error('password') is-invalid @enderror"
                      type="password" id="password" name="password" placeholder="Digite su contraseña" arial-label="password" required autocomplete="current-password">
                      @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                  </div>
    
                  <div class="mt-4 items-center flex justify-between">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-green-900 hover:bg-gray-800 rounded"
                      type="submit">Entrar</button>
                      
                      @if (Route::has('password.request'))
                        <a class="inline-block right-0 align-baseline font-bold text-sm text-500 text-white hover:text-red-400"
                        href="{{ route('password.request') }}">¿Olvido su contraseña ?</a>
                      @endif
                  </div>
    
            </form>
    
          </div>
        </div>
      </div>
    </div>
@endsection
