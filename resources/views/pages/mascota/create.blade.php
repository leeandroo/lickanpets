@extends('layouts.dashboard')
@section('page-title', 'Agregar mascota')
@section('title', 'Agregar Mascota')
@section('contenido')
<div class="row mb-0"></div>
<div class="row" style="padding-bottom: 2em;">
    <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <div class="card mt-4 ml-2 mr-2">
            <div class="card-body">
                <div class="container-fluid">
                    <p class="page-subtitle mb-4 text-left">Información de la mascota</p>
                        <form method="POST" action="">
                            <input type="hidden" name="_token" value="8vwiDU3wNopE3s03FZSzSDpUmOD92rqH0XSzmDql">
                                <div class="form-group">
                                    <div class="form-row">
                                    <!-- Nombre y chip de la mascota-->
                                            <!--Nombre-->
                                        <div class="col-lg-6 col-6 ">
                                            <input name="nombre" value="" class="form-control " type="text" placeholder="Nombre">
                                        </div>
                                            <!--num chip-->
                                        <div class="col-lg-6 col-6 ">
                                            <input name="chip" value="" class="form-control " type="text" placeholder="NºChip">
                                        </div>
                                    <!-- fin -->
                                    <!-- Especie y raza de la mascota-->
                                            <!--Especie-->
                                        <div class="col-lg-6 col-6 ">
                                            <label for="categoria" class="mt-3 box-label grey-text">Especie</label>
                                            <select class="browser-default custom-select" name="especie">
                                                <option value="Perro">Perro</option>
                                                <option value="Gato">Gato</option>
                                            </select>
                                        </div>
                                            <!--Raza-->
                                        <div class="col-lg-6 col-6 ">
                                            <label for="categoria" class="mt-3 box-label grey-text">Raza</label>
                                                <select class="browser-default custom-select" name="especie">
                                                    <option value="12">Especie única (mestizo)</option>
                                                    <option value="22">Pug</option>
                                                    <option value="32">Poodle</option>
                                                    <option value="42">Golden Retriever</option>
                                                    <option value="52">Yorkshire</option>
                                                </select>
                                            </div>
                                    <!--fin -->

                                    <!-- Sexo y fecha de nacimiento -->
                                            <!--Sexo-->
                                            <div class="col-lg-6 col-6 ">
                                                <label for="sexo" class="mt-3 box-label grey-text">Sexo</label>
                                                <div class="col-lg-10 col-6">
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
                                                        <label class="form-check-label grey-text" for="materialUnchecked" >Macho</label>
                                                        <input type="radio" class="form-check-input" id="materialChecked" name="materialExampleRadios">
                                                        <label class="form-check-label grey-text" for="materialChecked">Hembra</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Fecha nacimiento-->
                                            <div class="col-lg-4 col-6">
                                                <label for="nacimiento" class="mt-3 box-label grey-text">Fecha de Nacimiento</label>
                                                <input name="fecha" value="" class="form-control " type="text" placeholder="dd/mm/aaaa">
                                            </div>
                                    <!-- Peso y Foto -->
                                            <!--Peso-->
                                            <div class="col-lg-6 col-sm-6">
                                                <label for="descripcion" class="mt-3 box-label grey-text">Peso</label>
                                                <select class="browser-default custom-select" name="esterilización">
                                                    <option value="1">1 KG</option>
                                                    <option value="2">2 KG</option>
                                                    <option value="3">3 KG</option>
                                                    <option value="4">4 KG</option>
                                                    <option value="5">5 KG</option>
                                                </select>
                                            </div>
                                            <!-- Foto -->
                                            <div class="col-lg-6 col-6">
                                                <label for="descripcion" class="mt-3 box-label grey-text">Fotografía</label>
                                                    <form class="md-form">
                                                        <div class="file-field">
                                                          <div class="btn btn-rounded grey btn-sm float-right">
                                                            <span>Elegir Fotografía</span>
                                                            <input type="file">
                                                          </div>
                                                          <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Sube la imagen de tu mascota">
                                                          </div>
                                                        </div>
                                                    </form>
                                            </div>
                                </div>
                                {{-- <div class="md-form my-0 text-left" id="btnformulario">
                                    <button type="submit" class="btn btn-rounded green white-text waves-effect waves-light" id="btn-aceptar">Ingresar <svg class="svg-inline--fa fa-paper-plane fa-w-16 ml-2" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg><!-- <i class="fa fa-paper-plane ml-2"></i> --></button>
                                    <button type="reset" class="btn btn-rounded red white-text waves-effect waves-light" id="btn-cancelar">Cancelar <svg class="svg-inline--fa fa-times fa-w-11 ml-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <i class="fas fa-times ml-2"></i> --></button>
                                </div> --}}
                                <div class="md-form my-0 text-left" id="btnformulario">
                                    <a class="btn btn-success btn-sm btn-rounded m-0 float-right" href="{{ url('/user-profile/mascota/index') }}">
                                        <i class="fas fa-plus"></i>Ingresar mascota
                                    </a>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
