@extends('layouts.dashboard')
@section('page-title', 'Mis Planes')
@section('title', 'Mis Planes')
@section('plan', 'active-item')
@section('contenido')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card mt-4">
            <div class="card-body">
                <div class="container-fluid">
                    <blockquote class="blockquote bq-warning">
                    <p class="bq-title">No posee planes contratados <i class="far fa-sad-cry"></i></p>
                    </blockquote>
                    <div id="modalCita" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header unique-color">
                                    <h4 class="modal-title white-text">Agregue a su mascota</h4>
                                </div>
                                <div class="modal-body">
                                    <p></p>
                                        <form class="align-items-center" style="color: #757575;" action="h"
                                            method="POST" class="needs-validation">
                                            <input type="hidden" name="_token"
                                                value="Rqd93Px3Pgn6D2EWUhO0UxKeRD0WLvP0FN5P21jN">
                                            <div class="form-group">
                                                <div>
                                                    <h6 class="form-title mt-3">Información de la mascota</h6>
                                                </div>
                                                <div class="form-row">
                                                    <!-- Nombre y chip de la mascota-->
                                                    <!--Nombre-->
                                                    <div class="col-md-4">
                                                        <input name="nombre" value="" class="form-control "
                                                            type="text" placeholder="Nombre">
                                                    </div>
                                                    <!--num chip-->
                                                    <div class="col-md-4 ">
                                                        <input name="chip" value="" class="form-control " type="text" placeholder="NºChip">
                                                    </div >
                                                    <!-- fin -->
                                                    <div class="col-md-4">
                                                        <label for="categoria" class="mt-3 box-label grey-text">Especie</label>
                                                            <select class="browser-default custom-select" name="especie">											
                                                                <option value="Perro">Perro</option>
                                                                <option value="Gato">Gato</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <input class="form-control" type="text"
                                                            placeholder="Nombre">
                                                    </div>
                                                    <div class="col-md-4 ml-auto">
                                                        <input class="form-control" type="text"
                                                            placeholder="NªChip">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-lg-4">
                                                        <label for="nombre" class="mt-3 box-label">Especie</label>
                                                        <select class="browser-default custom-select"
                                                            name="especie">
                                                            <option value="Mantención de equipos">Perro</option>
                                                            <option value="Mantención de vehículos">Gato</option>
                                                        </select>
    
                                                    </div>
                                                    <div
                                                        class="col-lg-4 col-md-12 col-sm-10 col-xs-12 mt-3 float-right">
                                                        <label class="float-right" for="name">Descripción</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="md-for mt-5 mb-3 text-right" id="btnformulario">
                                                <button type="submit"
                                                    class="btn btn-sm btn-rounded unique-color white-text"
                                                    id="btn-aceptar">Enviar <i
                                                        class="fa fa-paper-plane ml-2"></i></button>
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
@endsection