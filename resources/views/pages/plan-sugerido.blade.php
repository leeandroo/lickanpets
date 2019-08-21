@extends('layouts.main')
@section('titulo', 'Planes Sugeridos')
@section('contenido')

        <!-- Content -->
        <div class="container my-5" style="">
    
            <!-- Section heading -->
            <h2 class="h1 font-weight-bold text-center my-2 mplus">Te sugerimos los siguientes planes</h2>
            <!-- Section description -->
            <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
                eum porro a pariatur veniam.</p>
            <!-- Grid row -->
            <div class="row" id="centrar">
    
                <div class="col-lg-10">
    
                    <div class="row ">
    
                        <!--  Grid column  -->
                        <div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
    
                            <!-- Card -->
                            <div class="card ">
    
                                <!-- Pricing card -->
                                <div
                                    class="black-white text-center pricing-card d-flex align-items-center py-3 px-3 rounded">
    
                                    <!-- Content -->
                                    <div class="card-body">
                                        <h4 class="font-weight-bold mt-2 text-black">Plan Basico</h4>
    
                                        <!--Price -->
                                        <div class="price pt-0">
                                            <h3 class="number mb-0 purple-text">8.216</h3>
                                        </div>
    
                                        <ul class="striped mb-4">
    
                                            <li class="my-2">
                                                <!-- Servicios -->
                                                <div class="row my-2">
    
                                                    <div class="col my-0" align="Right">
                                                        <p class="my-2">Servicios Basicos</p>
                                                    </div>
    
                                                    <div class="col my-0" id="centrar">
                                                        <button type="button"
                                                            class="btn-floating white btn-sm my-0 popoverInfo"
                                                            data-toggle="popoverServiciosBasicos" data-placement="bottom">
                                                            <i class="fas fa-info"
                                                                style="font-size: 10px; color: purple;"></i>
                                                        </button>
                                                    </div>
    
                                                </div>
    
                                            </li>
    
                                            <li class="my-2">
                                                <!-- Vacunas  -->
                                                <div class="row my-2">
    
                                                    <div class="col my-0" align="Right">
                                                        <p class="my-2">Vacunas</p>
                                                    </div>
    
                                                    <div class="col my-0" id="centrar">
                                                        <button type="button"
                                                            class="btn-floating white btn-sm my-0 popoverInfo"
                                                            data-toggle="popoverVacunas" data-placement="bottom">
                                                            <i class="fas fa-info"
                                                                style="font-size: 10px; color: purple;"></i>
                                                        </button>
                                                    </div>
    
                                                </div>
    
                                            </li>
    
                                            <li class="my-0">
                                                <!-- ServiciosEsteticos -->
                                                <div class="row my-2">
    
                                                    <div class="col my-0" align="Right">
                                                        <p class="my-2">Servicios Estéticos</p>
                                                    </div>
    
                                                    <div class="col my-0" id="centrar">
                                                        <button type="button"
                                                            class="btn-floating white btn-sm my-0 popoverInfo"
                                                            data-toggle="popoverEsteticos" data-placement="bottom">
                                                            <i class="fas fa-info"
                                                                style="font-size: 10px; color: purple;"></i>
                                                        </button>
                                                    </div>
    
                                                </div>
                                            </li>
    
                                        </ul>
                                        <a class="btn btn-rounded btn-purple mb-2" href="{{ url('/login') }}">Comprar ahora</a>
                                        <a class="btn btn-rounded btn-purple mb-2" href="{{ url('/plan-editar') }}">Personalizar Plan</a>
    
    
                                    </div>
                                    <!-- Content -->
    
                                </div>
                                <!-- Pricing card -->
    
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- Grid column -->
    
                        <!--  Grid column  -->
                        <div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
    
                            <!-- Card -->
                            <div class="card card-image" style="background-image: url('img/fondoPlan.jpeg');">
    
                                <!-- Pricing card -->
                                <div
                                    class="text-white text-center pricing-card d-flex align-items-center rgba-purple-strong py-3 px-3 rounded">
                                    <!-- Pricing card -->
    
                                    <!-- Content -->
                                    <div class="card-body">
                                        <h4 class="font-weight-bold mt-2 text-black">Plan Pro</h4>
    
                                        <!--Price -->
                                        <div class="price pt-0">
                                            <h3 class="number mb-0 purple-text white-text">8.216</h3>
                                        </div>
    
                                        <ul class="striped mb-4">
    
                                            <li class="my-2">
                                                <!-- Servicios -->
                                                <div class="row my-2">
    
                                                    <div class="col my-0" align="Right">
                                                        <p class="my-2">Servicios Basicos</p>
                                                    </div>
    
                                                    <div class="col my-0" id="centrar">
                                                        <button type="button"
                                                            class="btn-floating white btn-sm my-0 popoverInfo"
                                                            data-toggle="popoverServiciosBasicos" data-placement="bottom">
                                                            <i class="fas fa-info"
                                                                style="font-size: 10px; color: purple;"></i>
                                                        </button>
                                                    </div>
    
                                                </div>
    
                                            </li>
    
                                            <li class="my-2">
                                                <!-- Vacunas  -->
                                                <div class="row my-2">
    
                                                    <div class="col my-0" align="Right">
                                                        <p class="my-2">Vacunas</p>
                                                    </div>
    
                                                    <div class="col my-0" id="centrar">
                                                        <button type="button"
                                                            class="btn-floating white btn-sm my-0 popoverInfo"
                                                            data-toggle="popoverVacunas" data-placement="bottom">
                                                            <i class="fas fa-info"
                                                                style="font-size: 10px; color: purple;"></i>
                                                        </button>
                                                    </div>
    
                                                </div>
    
                                            </li>
    
                                            <li class="my-2">
                                                <!-- Vacunas  -->
                                                <div class="row my-2">
    
                                                    <div class="col my-0" align="Right">
                                                        <p class="my-2">Examenes</p>
                                                    </div>
    
                                                    <div class="col my-0" id="centrar">
                                                        <button type="button"
                                                            class="btn-floating white btn-sm my-0 popoverInfo"
                                                            data-toggle="popoverVacunas" data-placement="bottom">
                                                            <i class="fas fa-info"
                                                                style="font-size: 10px; color: purple;"></i>
                                                        </button>
                                                    </div>
    
                                                </div>
    
                                            </li>
    
                                            <li class="my-2">
                                                <!-- Vacunas  -->
                                                <div class="row my-2">
    
                                                    <div class="col my-0" align="Right">
                                                        <p class="my-2">Servicios Clinicos</p>
                                                    </div>
    
                                                    <div class="col my-0" id="centrar">
                                                        <button type="button"
                                                            class="btn-floating white btn-sm my-0 popoverInfo"
                                                            data-toggle="popoverVacunas" data-placement="bottom">
                                                            <i class="fas fa-info"
                                                                style="font-size: 10px; color: purple;"></i>
                                                        </button>
                                                    </div>
    
                                                </div>
    
                                            </li>
    
                                            <li class="my-0">
                                                <!-- ServiciosEsteticos -->
                                                <div class="row my-2">
    
                                                    <div class="col my-0" align="Right">
                                                        <p class="my-2">Servicios Estéticos</p>
                                                    </div>
    
                                                    <div class="col my-0" id="centrar">
                                                        <button type="button"
                                                            class="btn-floating white btn-sm my-0 popoverInfo"
                                                            data-toggle="popoverEsteticos" data-placement="bottom">
                                                            <i class="fas fa-info"
                                                                style="font-size: 10px; color: purple;"></i>
                                                        </button>
                                                    </div>
    
                                                </div>
                                            </li>
                                        </ul>
                                        <a class="btn btn-rounded btn-outline-white mb-2" href="{{ url('/login') }}">Comprar ahora</a>
                                        <a class="btn btn-rounded btn-outline-white mb-2" href="{{ url('/plan-editar') }}">Personalizar Plan</a>
    
    
                                    </div>
                                    <!-- Content -->
    
                                </div>
                                <!-- Pricing card -->
    
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- Grid column -->
    
                        <div>
                            <div id="infoPopServiciosBasicas" style="display: none">
                                <ul class="list-group custom-popover" alagin="left">
                                    <li class="list-group-item">
                                        <p class="my-0">● 2 Consultas</p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="my-0">● 4 Antiparasitarios</p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="my-0">● 1 microchip</p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="my-0">● 2 Certificados de Viaje</p>
                                    </li>
                                </ul>
                            </div>
                            <div id="infoPopVacunas" style="display: none">
                                <ul class="list-group custom-popover" alagin="left">
                                    <li class="list-group-item">
                                        <p class="my-0">● Antirrábica</p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="my-0">● Octuple(Protege contra: Parvovirosis, Distemper Canino, Hepatitis
                                            Infecciosa Canina, Influenza, Leptospirosis, Coronavirus.)</p>
                                    </li>
                                </ul>
                            </div>
                            <div id="infoPopEstetica" style="display: none">
                                <ul class="list-group custom-popover">
                                    <li class="list-group-item">
                                        <p class="my-0">● 3 Peluquerias</p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="my-0">● 4 Baño completo</p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="my-0">● 1 solo baño</p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="my-0">● 2 Baño seco</p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="my-0">● 2 Baño sanitario</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                    </div>
    
                </div>
    
            </div>
            <!-- Grid row -->
    
        </div>
        
@endsection 