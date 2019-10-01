@extends('layouts.main')
@section('titulo', 'Cotazación')
@section('contenido')
<body style="background-image: linear-gradient(120deg,#3498db,#8e44ad); background-attachment: fixed;">

		<!-- Content -->
		<div class="container my-5">

				<!-- Section heading -->
				<h1 class="font-weight-bold white-text text-center my-2 mplus">Quiero conocer a tu mascota</h1>
				<!-- Section description -->
				<p class="text-center w-responsive white-text mx-auto mb-5">Para poder comenzar necesito conocer a tu mascota, Selecciona la especie de tu mascota para determinar los distintos servicios y productos que le corresponden.</p>
				<!-- Grid row -->
				<div class="row" id="centrar">

					<div class="col-lg-11">

						<div class="row" id="centrar">

							<!--  Grid column  -->
							<div class="col-lg-6 col-md-12 mb-lg-0 mb-4" >

								<!-- Card -->
								<div class="card ">
									<div class="p-4" style="margin-left: 4%;">

                                        <form method="POST" enctype="multipart/form-data" action="{{ route('planCot') }}">    
                                        {!! csrf_field() !!} 
											<ul class="stepper linear">
											
                                                <li class="step active">
                                                    <div class="step-title waves-effect waves-dark">Conociendo a tu mascota</div>
                                                    <div class="step-new-content">														

                                                    
                                                        <p class="text-center" style="color: #6C757D;">¿Tienes un perro o un gato?</p>
                                                        
                                                        <div class="row mb-2 my-4">
                                                            
                                                                <!-- Group of material radios - option 1 -->
                                                                <div class="col">
                                                                        <div id="centrar">
                                                                            <img src="img/perrchi.PNG" width="120" height="100">
                                                                        </div>
                                                                        <div id="centrar">
                                                                            <input type="radio" value="1" class="form-check-input" id="especie1" name="radioEspecies" checked>
                                                                            <label class="form-check-label" for="especie1" ></label>
                                                                        </div>													
                                                                    </div>
                                                                    <!-- Group of material radios - option 1 -->
                                                                    <div class="col">
                                                                            <div id="centrar">
                                                                                <img src="img/gatochi.PNG" width="80" height="100">
                                                                            </div>
                                                                            <div id="centrar">
                                                                                <input type="radio" value="2" class="form-check-input" id="especie2" name="radioEspecies">
                                                                                <label class="form-check-label" for="especie2" ></label>
                                                                            </div>													
                                                                        </div>
                                                        </div>

                                                        <div class="row mb-5">
                                                            <div class="col-12 ml-auto my-0">
                                                            <input name="nombre" class="form-control" type="text" placeholder="¿Cual es su nombre?" required>
                                                            
                                                            </div>
                                                        </div>                                                                
                                                            
                                                        

                                                            
                                                    </div>
                                                    
                                                </li>													
											</ul>

                                            <div id="centrar">
                                                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Siguiente</button>                                                            
                                            </div>
                                        </form>

									</div>
			
								</div>
								<!-- Card -->
		
									<!-- <div class="z-depth-1 m-2">
											
										  </div> -->

							</div>
							<!-- Grid column -->
								
						</div>

					</div>

				</div>
				<!-- Grid row -->
				
		</div>
		<!-- Content -->

</body>

@endsection 
