@extends('layouts.main')
@section('titulo', 'Cotazación')
@section('contenido')
<body style="background-image: linear-gradient(120deg,#3498db,#8e44ad); background-attachment: fixed;">

		<!-- Content -->
		<div class="container my-5">

				<!-- Section heading -->
				<h1 class="font-weight-bold white-text text-center my-2 mplus">Quiero conocer a tu mascota</h1>
				<!-- Section description -->
				<p class="text-center w-responsive white-text mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
					eum porro a pariatur veniam.</p>
				<!-- Grid row -->
				<div class="row" id="centrar">

					<div class="col-lg-11">

						<div class="row" id="centrar">

							<!--  Grid column  -->
							<div class="col-lg-6 col-md-12 mb-lg-0 mb-4" >

								<!-- Card -->
								<div class="card ">
									<div class="p-4" style="margin-left: 4%;">

										
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
																			<input type="radio" class="form-check-input" id="especie1" name="radioEspecies" checked>
																			<label class="form-check-label" for="especie1" ></label>
																		</div>													
																	</div>
																	<!-- Group of material radios - option 1 -->
																	<div class="col">
																			<div id="centrar">
																				<img src="img/gatochi.PNG" width="80" height="100">
																			</div>
																			<div id="centrar">
																				<input type="radio" class="form-check-input" id="especie2" name="radioEspecies">
																				<label class="form-check-label" for="especie2" ></label>
																			</div>													
																		</div>
														</div>
														<div class="row mb-5">
																<div class="md-form col-12 ml-auto my-0">
																		<select class="browser-default custom-select" name="selectRaza" required>
																				<option value="" disabled selected>¿Qué Raza es?</option>
																				<option value="Raza1">Raza 1</option>
																				<option value="Raza2">Raza 2</option>
																				<option value="Raza3">Raza 3</option>
																				<option value="Raza4">Raza 4</option>
																				<option value="Raza5">Raza 5</option>
																				<option value="Raza6">Raza 6</option>
																		</select>
																</div>
														</div>														
														<div class="row mb-5">
															<div class="md-form col-12 ml-auto my-0">
																<select class="browser-default custom-select" name="selectSexo" required>
																		<option value="" disabled selected>¿Qué Sexo es?</option>
																		<option value="Macho">Macho</option>
																		<option value="Hembra">Hembra</option>
																</select>
															</div>
														</div>
														<div class="row mb-5">
																<div class="md-form col-12 ml-auto my-0">
																	<select class="browser-default custom-select" name="selectEdad" required>
																			<option value="" disabled selected>¿Qué edad tiene aproximadamente?</option >
																			<option value="cachorro">0 - 1 años</option>
																			<option value="adulto">1 - 6 años</option>
																			<option value="senior">6 -14 años</option>
																	</select>
																</div>
														</div>
														<div class="row mb-5">
															<div class="col-12 ml-auto my-0">
															<input name="nombre" class="form-control" type="text" placeholder="¿Cual es su nombre?" required>
															
															</div>
														</div>
														
	
														<div class="step-actions" id="centrar">
															<!-- <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">Siguiente</button> -->
															<button class="btn btn-primary btn-rounded btn-sm next-step">Siguiente</button>
														</div>
														</div>
														
													</li>
													
													<li class="step">
														<div class="step-title waves-effect waves-dark">Ya casi terminamos</div>
														<div class="step-new-content">

																<p class="text-center" style="color: #6C757D;">¿Cuál es el tamaño de la raza tu mascota?</p>
	
																<div class="row mb-4">
																	<div class="col-md-12" id="centrar">
																	
																			<img id="myImg" src="img/tamaños2.PNG" style="width: 100%; height: auto;">
																			<!-- The Modal -->
																			<div id="myModal" class="modal">																					
																				<span class="close">&times;</span>
																				<img class="modal-content" id="img01">
																			</div>
																	
																	</div>
																</div>

																<div class="row mb-4">
																		<div class="md-form col-12 ml-auto my-0">
																				<select class="browser-default custom-select" re>
																						<option value="" disabled selected>Selecciona un tamaño</option>
																						<option value="XXL">XXL</option>
																						<option value="XL">XL</option>
																						<option value="L">L</option>
																						<option value="M">M</option>
																						<option value="S">S</option>
																						<option value="XS">XS</option>
																						<option value="XXS">XXS</option>
																				</select>
																		</div>
																</div>
	
	
														<div class="step-actions" id="centrar">
															<button type="button" class="btn btn-primary btn-rounded btn-sm next-step">Siguiente</button>
															<button type="button" class="btn btn-secondary btn-rounded btn-sm previous-step">atras</button>															
														</div>
														</div>
													</li>

	
													<li class="step">
														<div class="step-title waves-effect waves-dark">Hemos Terminado!</div>
														<div class="step-new-content">
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
														<div class="step-actions">
															<a class="btn btn-primary btn-rounded btn-sm" href="{{ url('/sugerido') }}">Cotizar Plan</a>
														</div>
														</div>
													</li>
											</ul>

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
