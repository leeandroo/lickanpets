@extends('layouts.main')
@section('titulo', 'Iniciar sesión')
@section('contenido')
<body style="background-image: linear-gradient(120deg,#FCD6E3,#A9ECE9); background-attachment: fixed;">

    <div class="container my-5">
        <div class="row" id="centrar">
            <div class="col-lg-9" id="centrar">
                <div class="card col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="container-fluid" id="centrar">
                            <div class="card-body">
                                <div class="card-body">
                                    <form class="align-items-center" style="color: #757575;" action="{{ route('register') }}" method="post">
                                    {!! csrf_field() !!}
                                        <div class="form-row mb-3 mt-3 text-center">
                                            <div class="col-lg-12">
                                                <h2 class="font-weight-bold black-text mplus"><i class="fas fa-paw animated tada infinite "></i> Se parte de nuestra familia</h2>	
                                                <p class="text-center grey-text mb-4" style="font-size: 15px;">
                                                    Registrate para vivir una experiencia única para tu mascota
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-group ml-2 mr-2">
                                            <div>
                                                <h6 class="form-title mt-3">Informacion del usuario</h6>
                                                <input name="tipo_usuario" class="form-control " type="hidden" value="Cliente">
                                            </div>
                                            <div class="form-row">
                                                <div class="col-lg-6 col-md-6 col-6 my-2">
                                                    <!-- <label for="nombre" class="mt-1 box-label">Nombre</label> -->
                                                    <input name="nombre" class="form-control " type="text" placeholder="Nombre" value="{{ old('nombre') }}">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-6 my-2">
                                                    <!-- <label for="apellido" class="mt-1 box-label">Apellido</label> -->
                                                    <input name="apellido" class="form-control " type="text" placeholder="Apellido" value="{{ old('apellido') }}">
                                                </div>                                                
                                                <div class="col-lg-6 col-md-6 col-12 my-2">
                                                    <!-- <label for="telefono" class="mt-1 box-label">Celular 1</label> -->
                                                    <div class="input-group mb-2 mr-sm-2">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">+569</div>
                                                        </div>
                                                        <input name="telefono1" type="text" class="form-control py-0" placeholder="Movil 1" maxlength="8" value="{{ old('telefono1') }}">
                                                    </div>                                                                                                                        
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12 my-2">
                                                    <!-- <label for="telefono" class="mt-1 box-label">Celular 2</label> -->
                                                    <div class="input-group mb-2 mr-sm-2">
                                                        <div class="input-group-prepend">
                                                        <div class="input-group-text">+569</div>
                                                        </div>
                                                        <input name="telefono2" type="text" class="form-control py-0" placeholder="Movil 2" maxlength="8" value="{{ old('telefono2') }}">
                                                    </div>                                                                                                                        
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12 my-2" >
                                                    <!-- <label for="rut" class="mt-1 box-label">RUT</label> -->
                                                    <div class="row">
                                                        <div class="col-9 pr-0">
                                                            <input name="rut" class="form-control" type="text" placeholder="RUT" value="{{ old('rut') }}" maxlength="8">
                                                        </div>
                                                        <div class="col-1 px-0" id="centrar">
                                                            <div>
                                                            <p class="text-center mb-0">-</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 pl-0">
                                                            <input name="verificador" class="form-control ml-0 text-center px-0" type="text" placeholder="0" value="{{ old('verificador') }}" maxlength="1">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12 my-2">
                                                    <!-- <label for="direccion" class="mt-1 box-label">Dirección</label> -->
                                                    <input name="direccion" class="form-control " type="text" placeholder="Dirección" value="{{ old('direccion') }}">
                                                </div>
                                                <!-- <div>                                                
                                                    <div class="form-check px-1" >
                                                        <input class="form-check-input" type="checkbox" id="inlineFormCheckMD" name="whatssapp" value="{{ old('whatssapp') }}">
                                                        <label class="form-check-label" for="inlineFormCheckMD">
                                                        <p style="font-size: 13px;">¿Quieres que te hablemos por WhatsApp?</p>
                                                        </label>
                                                    </div>
                                                </div> -->
                                                
                                                                                                            
                                            </div>
                                        </div>
                                        <div class="form-group ml-2 mr-2">
                                            <div>
                                                <h6 class="form-title mt-3"> Detalle de la cuenta</h6>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-lg-12 col-sm-12 my-2" >
                                                    <!-- <label for="email" class="mt-1 box-label">Correo</label> -->
                                                    <input name="email" class="form-control " type="email" placeholder="Email" value="{{ old('email') }}">
                                                </div>
                                                <div class="col-lg-6 col-12 my-2">
                                                    <!-- <label for="contraseña" class="mt-1 box-label">Contraseña</label> -->
                                                    <input name="contraseña" class="form-control " type="password" placeholder="Contraseña" value="{{ old('contraseña') }}">
                                                </div>
                                                <div class="col-lg-6 col-12 my-2">
                                                    <!-- <label for="confirmar" class="mt-1 box-label">Confirmar</label> -->
                                                    <input name="confirmar" class="form-control " type="password" placeholder="Confirma Contraseña" value="{{ old('confirmar') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-form my-0 text-center" id="btnLogin">
                                            <button type="submit" class="btn">Crear cuenta</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    
@endsection