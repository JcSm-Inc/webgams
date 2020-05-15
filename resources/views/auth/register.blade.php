@extends('layouts.sidebar')
@section('contenido')

<div class="col-md-6 offset-4">
            <!-- general form elements disabled -->
            <div class="card card-green">
                <div class="card-header">
                  <h3 class="card-title">Registro de Nuevo Usuario</h3>
                  @if ($errors->any())
                    <p>Hay errores!</p> 
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  @endif
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form method="POST" role="form" action="{{ route('register') }}">
                  @csrf
                    <!-- input states -->
                    <div class="row">
                    <div class="col-md-7 col-sm-4 col-12">
                      <div class="info-box">
                        <div class="info-box-content">
                          <div class="form-group">
                            <label class="col-form-label" for="nick"> Ingrese Nick</label>
                            <input type="text" class="form-control @error('nick') is-invalid @enderror" id="nick" name="nick" value="{{ old('nick') }}" placeholder="Nick">
                            @error('nick')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label class="col-form-label" for="password"> Ingrese Contraseña</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"  placeholder="Contraseña">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label class="col-form-label" for="password-confirm"> Repetir Contraseña</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Contraseña">
                          </div>

                        </div>
                        <!-- /.info-box-content -->
                      </div>
                    </div>
                      <div class="col-md-5 col-sm-6 col-12">
                        <div class="info-box">

                          <div class="info-box-content">
                              <div class="container">
                                <label class="btn btn-success btn-file">
                                      Subir Fotografia <input type="file" name="file" id="file" style="display: none;">
                                </label>
                                <br >
                                <span id="uploaded_image"></span>
                                @error('FOTO')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                              </div>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                    </div>

                      <!-- /.info-box -->

                        <div class="form-group row">
                            <label class="form-label col-md-3 col-sm-3 col-xs-3" for="CI"> Ingrese C.I.:</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control @error('CI') is-invalid @enderror" id="CI" name="CI" value="{{old('CI')}}" placeholder="C.I." >
                              @error('CI')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                            </div>
                        </div>
                      <div class="form-group row">
                        <label class="form-label col-md-3 col-sm-3 col-xs-3" for="NOMBRES"> Ingrese Nombres:</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control text-uppercase @error('NOMBRES') is-invalid @enderror" id="NOMBRES" name="NOMBRES" value="{{old('NOMBRES')}}" placeholder="Ingrese Nombres">
                          @error('NOMBRES')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="form-label col-md-3 col-sm-3 col-xs-3" for="APELLIDOS"> Ingrese Apellidos:</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control text-uppercase @error('APELLIDOS') is-invalid @enderror " id="APELLIDOS" name="APELLIDOS" value="{{old('APELLIDOS')}}" placeholder="Ingrese Apellidos">
                          @error('APELLIDOS')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group  row">
                              <label class="form-label col-md-3 col-sm-3 col-xs-3" for="email"> Ingrese email</label>
                              <div class="col-md-9 col-sm-9 col-xs-9">
                              <input type="text" class="form-control text-lowercase @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" placeholder="ejemplo@ejemplo.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              
                      </div>
                                    <!-- Date -->
                        <div class="form-group row">
                            <label class="form-label col-md-3 col-sm-3 col-xs-3">Fecha de Nacimiento:</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input name="FECHANACIMIENTO" id="FECHANACIMIENTO" type="text" class="form-control datetimepicker-input @error('FECHANACIMIENTO') is-invalid @enderror" value="{{old('FECHANACIMIENTO')}}" data-target="#reservationdate"/>
                                @error('FECHANACIMIENTO')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- radio -->
                        <div class="form-group row">
                            <label class="form-label col-md-3 col-sm-3 col-xs-3">Sexo:</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                            <div class="col-sm-6">
                      <!-- radio -->
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" value="si" checked>
                            <label for="customRadio1" class="custom-control-label">Varon</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" value="no" >
                            <label for="customRadio2" class="custom-control-label">Mujer</label>
                          </div>
                            </div>
                          </div>
                        </div>
                      
                    

                        <!--<button type="submit" class="btn btn-danger m-md-2 float-right" >Cancelar</button>-->
                        <button type="submit" class="btn btn-success m-md-2 float-right" >Aceptar</button>                   
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
</div>
@stop
@section('scripts')

<script src="plugins/jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("No es un archivo de imagen");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("El archivo de imagen es muy grande");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"./extras/upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});
</script>

              <!-- /.card -->
@endsection