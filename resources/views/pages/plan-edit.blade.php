@extends('layouts.main')
@section('titulo', 'Edita tu plan')
@section('contenido')

		<!-- Content -->
		<div class="container" style="padding-top: 10px; padding-bottom: 10px;">

				<!-- Section heading -->
				<h2 class="h1 font-weight-bold text-center my-2 mplus">Plan pro para Rocky</h2>
				<!-- Section description -->
				<p class="text-center w-responsive mx-auto mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
					eum porro a pariatur veniam.</p>
				<div class="my-2" id="centrar">					
						
						<button type="button" class="btn btn-outline-secondary btn-rounded waves-effect btn my-0 popoverInfo" data-toggle="popoverIconos" data-placement="bottom" data-content="<ul class='list-group custom-popover'>														
								<li class='list-group-item '><h5 class='mplus estiloSB'><i class='fas fa-notes-medical'></i> Servicios Básicos</h5></li>
								<li class='list-group-item '><h5 class='mplus estiloVC'><i class='fas fa-syringe'></i> Vacunas</h5></li>
								<li class='list-group-item '><h5 class='mplus estiloEX'><i class='fas fa-file-medical-alt'></i> Examenes</h5></li>
								<li class='list-group-item '><h5 class='mplus estiloSC'><i class='fas fa-user-md'></i> Servicios Clinicos</h5></li>
								<li class='list-group-item '><h5 class='mplus estiloES'><i class='fas fa-bath'></i> Estetica</h5></li>
								</ul>">Categorias</button>
						
						
						<div id="refer" style="display: none">							
							<ul class="list-group custom-popover">														
							<li class="list-group-item text-center"><h5 class="mplus estiloSB">Servicios Básicos</h5></li>
							<li class="list-group-item text-center"><h5 class="mplus estiloVC">Vacunas</h5></li>
							<li class="list-group-item text-center"><h5 class="mplus estiloEX">Examenes</h5></li>
							<li class="list-group-item text-center"><h5 class="mplus estiloSC">Servicios Clinicos</h5></li>
							<li class="list-group-item text-center"><h5 class="mplus estiloES">Estetica</h5></li>
							</ul>
						</div>		
								
				</div>
					

				<!-- Grid row -->
				<div class="row" id="centrar">

					<div class="col-lg-6">

						<div class="row" id="centrar">

							<!--  Grid column  -->
							<div class="col-lg-12 col-md-12 mb-lg-0 mb-4 my-2">

								<!-- Table with panel --> 
									<div class="card card-cascade narrower ">

										<!--Card image-->
										<div class="view view-cascade purple-gradient gradient-card-header mb-3" >											
											
											<!--Price -->
											<div class="pricing-card">
												<div class="price pt-0">
													<h3 class="number mb-0 white-text font-weight-bold my-0">8.216</h3>
												</div>
											</div>
											

										</div>
										<!--/Card image-->																			
									 
										<div class="px-4">
									
										<div class="table-wrapper table-responsive table-wrapper-scroll-y my-custom-scrollbar scrollbar scrollbar-primary my-2">

											<!-- <h5 class="sub-title text-center" style="color: #3C7EEF; padding-bottom: 5px;">Servicios Básicos</h5> -->
											
											<!--Table-->
											<table class="table table-hover mb-0" id="dtHorizontalVerticalExample">									
											<!--Table head-->
											<thead>
												<tr>
													<th class="text-center" spellcheck="display:block;">
															<i class="fas fa-info-circle animated tada  infinite" style="font-size: 25px;" data-toggle="popoverIconos" data-placement="right" data-content="<ul class='list-group custom-popover'>														
																	<li class='list-group-item '><h5 class='mplus estiloSB'><i class='fas fa-notes-medical'></i> Servicios Básicos</h5></li>
																	<li class='list-group-item '><h5 class='mplus estiloVC'><i class='fas fa-syringe'></i> Vacunas</h5></li>
																	<li class='list-group-item '><h5 class='mplus estiloEX'><i class='fas fa-file-medical-alt'></i> Examenes</h5></li>
																	<li class='list-group-item '><h5 class='mplus estiloSC'><i class='fas fa-user-md'></i> Servicios Clinicos</h5></li>
																	<li class='list-group-item '><h5 class='mplus estiloES'><i class='fas fa-bath'></i> Estetica</h5></li>
																	</ul>"></i>

													</th>
													<th class="th-lg sub-title2" style="padding-top: 5px;">
														Servicios
													</th>
													<th class="th-lg sub-title2 text-center" style="padding-top: 5px;">
														Opciones
													</th>												
												</tr>
											</thead>
											<!--Table head-->
									
											<!--Table body-->
											<tbody id="sub-title3">
												<tr>
													<td class="text-center">
														<i class="fas fa-notes-medical" style="font-size: 25px; color: #AA3B70;"></i>
													</td>
													<td class="sub-title3">Consultas</td>
													<td class="text-center">
														<div id="centrar">
															<select class="browser-default custom-select" style="width: 70%;" >
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
															</select>	
														</div>																																																										
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<i class="fas fa-notes-medical" style="font-size: 25px; color: #AA3B70;"></i>
													</td>
													<td class="sub-title3">Antiparasitario</td>
													<td>														
														<div id="centrar">
															<select class="browser-default custom-select" style="width: 70%;" >
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
															</select>	
														</div>	
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<i class="fas fa-notes-medical" style="font-size: 25px; color: #AA3B70;"></i>
													</td>
													<td class="sub-title3">Certificado Viaje</td>
													<td>														
														<div id="centrar">
															<select class="browser-default custom-select" style="width: 70%;" >
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
															</select>	
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">														
														<i class="fas fa-notes-medical" style="font-size: 25px; color: #AA3B70;"></i>
													</td>
													<td class="sub-title3">MicroChip</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox" >
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">														
														<i class="fas fa-syringe" style="font-size: 25px; color: #13A08E;"></i>
													</td>
													<td class="sub-title3">Octuple</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox" checked>
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">														
														<i class="fas fa-syringe" style="font-size: 25px; color: #13A08E;"></i>
													</td>
													<td class="sub-title3">Antirrabica</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox">
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">														
														<i class="fas fa-syringe" style="font-size: 25px; color: #13A08E;"></i>
													</td>
													<td class="sub-title3">Parainfluenza</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox" checked>
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">														
														<i class="fas fa-file-medical-alt" style="font-size: 25px; color: #FB446A;"></i>
													</td>
													<td class="sub-title3">Exm. Sanrge</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox">
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">														
														<i class="fas fa-file-medical-alt" style="font-size: 25px; color: #FB446A;"></i>
													</td>
													<td class="sub-title3">Ecografía</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox" checked>
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">														
														<i class="fas fa-file-medical-alt" style="font-size: 25px; color: #FB446A;"></i>
													</td>
													<td class="sub-title3">Perfil Tiroideo</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox">
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">														
														<i class="fas fa-file-medical-alt" style="font-size: 25px; color: #FB446A;"></i>
													</td>
													<td class="sub-title3">Exm. Orina</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox" checked>
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>

												<tr>
													<td class="text-center">														
														<i class="fas fa-user-md" style="font-size: 25px; color: #8D60F6;"></i>
													</td>
													<td class="sub-title3">Limpieza Dental</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox" checked>
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">														
														<i class="fas fa-user-md" style="font-size: 25px; color: #8D60F6;"></i>
													</td>
													<td class="sub-title3">Esterilización</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox" checked>
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td class="text-center">														
														<i class="fas fa-bath" style="font-size: 25px; color: #F88510;"></i>
													</td>
													<td class="sub-title3">Solo Baño</td>
													<td class="text-center">																																																
														<div class="switch ">
															<label>																	  
																<input type="checkbox">
																<span class="lever"></span>
															</label>
														</div>
													</td>
												</tr>
												<tr>
														<td class="text-center">														
															<i class="fas fa-bath" style="font-size: 25px; color: #F88510;"></i>
														</td>
														<td class="sub-title3">Baño Seco</td>
														<td class="text-center">																																																
															<div class="switch ">
																<label>																	  
																	<input type="checkbox">
																	<span class="lever"></span>
																</label>
															</div>
														</td>
													</tr>
													<tr>
															<td class="text-center">														
																<i class="fas fa-bath" style="font-size: 25px; color: #F88510;"></i>
															</td>
															<td class="sub-title3">Baño Sanitario</td>
															<td class="text-center">																																																
																<div class="switch ">
																	<label>																	  
																		<input type="checkbox" checked>
																		<span class="lever"></span>
																	</label>
																</div>
															</td>
														</tr>																								

											</tbody>
											<!--Table body-->
											</table>
											<!--Table-->
											
										</div>

										<div id="centrar" class="my-3">
											<button type="button" class="btn  btn-rounded purple-gradient btn my-0 popoverInfo" data-toggle="popoverIconos" data-placement="bottom">Pagar</button>
										</div>

										</div>
									
									</div>
								<!-- Table with panel -->

							</div>
							<!-- Grid column -->
		
						</div>

					</div>

				</div>
				<!-- Grid row -->
				
		</div>
		<!-- Content -->

@endsection 
