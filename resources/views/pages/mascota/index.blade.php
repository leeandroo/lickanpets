@extends('layouts.dashboard')
@section('page-title', 'Mis Mascotas')
@section('title', 'Mis Mascotas')
@section('mascota', 'active-item')
@section('boton-agregar')
<a class="btn btn-success btn-sm btn-rounded m-0 float-right" href="{{ url('/mascota/create') }}">
    <i class="fas fa-plus"></i> Nueva mascota
</a>
@endsection
@section('contenido')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card mt-4">
        <div class="card-body">
            <div class="container-fluid">
                <p class="page-title text-center mb-3">Lista de mascotas</p>
                
                @if($mascotas->count() > 0)
                        @foreach($mascotas as $mascota)
                            <div class="card my-4">
                                <div class="card-body p-0">
                                    <div class="row ml-0 mr-0 mt-4 mb-1">
                                        <div class="col-6 col-lg-3 text-center mb-3">
                                            <div>
                                            
                                                <i class="fas fa-paw fa-2x yellow-text mb-2"></i>
                                            </div>
                                            <p class="card-text black-text"> 
                                                <b>nombre </b> <br>
                                                <span class="grey-text">{{ $mascota->nombre }}</span>
                                            </p>
                                        </div>
                                        <div class="col-6 col-lg-3 text-center mb-3">
                                            <div>
                                                <i class="fas fa-paw fa-2x blue-text mb-2"></i>                                            
                                            </div>
                                            <p class="card-text black-text"> 
                                                <b>Especie</b> <br>
                                                <span class="grey-text">{{ $mascota->especie_id }}</span>
                                            </p>
                                        </div>
                                        <div class="col-6 col-lg-3 text-center mb-3">
                                            <div>                                            
                                                <i class="fas fa-paw fa-2x green-text mb-2"></i>
                                            </div>
                                            <p class="card-text black-text"> 
                                                <b>chip</b> <br>
                                                <span class="grey-text">{{ $mascota->chip }}</span>
                                            </p>
                                        </div>
                                        <div class="col-6 col-lg-3 text-center mb-3">
                                            <div>                                        
                                                <i class="fas fa-paw fa-2x red-text mb-2"></i>
                                            </div>
                                            <p class="card-text black-text"> 
                                                <b>foto</b> <br>
                                                <span class="grey-text">{{ $mascota->foto }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        @endforeach
                @else
                    <blockquote class="blockquote bq-warning">
                        <p class="bq-title">No posee mascotas <i class="far fa-sad-cry"></i></p>
                    </blockquote>
                @endif            
            </div>
        </div>
    </div>
</div>
@endsection
