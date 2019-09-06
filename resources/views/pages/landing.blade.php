@extends('layouts.main')
@section('titulo', 'Lickan Pets')
@section('contenido')
	  <!-- HEADER START -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">
        <div class="container">
          <!-- Navbar brand -->
          <div class="fondo">
            <a class="navbar-brand" href="#fondo"><img src="img/logo 2.PNG" width="170" height="35"></a>

            
          </div>    

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>              
          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="basicExampleNav">          
            <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item" id="centrar">
              <a class="nav-link" href="#nosotros">NOSOTROS</a>
            </li>
            <li class="nav-item" id="centrar">
              <a class="nav-link" href="#equipo">NUESTRO EQUIPO</a>
            </li>
            <li class="nav-item" id="centrar">
              <a class="nav-link" href="#diferencia">QUE NOS DIFERENCIA</a>
            </li>
            <li class="nav-item" id="centrar">
              <a class="nav-link" href="#servicios">NUESTRO SERVICIOS</a>
            </li>
            <li class="nav-item" id="centrar">              
              <a class=" btn btn-sm btn-rounded purple-gradient animated bounce delay-1s" href="#cpf">Cuidados Pet flexible</a>
            </li>
            </ul>          
            <!-- Links -->
            <div id="centrar">
            <form class="form-inline" action="{{ url('/login') }}" method="get">
              <div class="md-form my-0">
                <button type="submit" class="btn btn-sm btn-rounded btn-outline-white">Iniciar sesión</button>
              </div>
            </form>
            </div>
            
              <!-- @if(Auth::user())
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/user-profile') }}">BIENVENIDO, <span class="text-uppercase">{{ Auth::user()->name }}</span></a>
                </li>
              </ul>
              @else
              <form class="form-inline" action="{{ url('/login') }}" method="get">
                <div class="md-form my-0">
                  <button type="submit" class="btn" id="btn-sign-in">Iniciar sesión</button>
                </div>
              </form>
                @endif-->
          </div> 
          <!-- Collapsible content -->      
          <div style="display:scroll; position:fixed; bottom:25px; left:25px;">
              <a href="https://wa.me/56948501762" target="_blank" type="button" class="btn-floating btn-lg white-text" id="centrar" style="background: #1BD741;"><i class="fab fa-whatsapp" style="font-size: 37px;"></i></a>            
          </div>
        </div>
    </nav>
    <!--/.Navbar-->

      
    <!--MASK-->
    <div class="view  jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('/img/fondoLickan.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Nombre empresa & formulario-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="container">
            <!--Grid row-->
            <div class="row pt-lg-5 mt-lg-5 align-items-center">
              <!--Grid column-->
              <div class="col-md-5  text-center text-md-left wow zoomIn" data-wow-delay="0.3s">

                <form class="form-inline">
                    <div class="md-form my-0">
                      <h2 class="display-4 mb-3" id="titlemask">Clínica Veterinaria Lickan Pets</h2>
                      <!--cabeza-->
                      <!--raya-->
                      <hr class="white">
                      <!--raya-->
                      <!--descripcion-->
                      <!-- Card -->
                        <div class="card card-cascade wider">
                          <!-- Card content -->
                          <div class="card-body card-body-cascade">
                            <h2 class="title ">Cuidados Pets Flexibles</h2>
                            <!-- Text -->
                            <p class="card-text">
                              Te invitamos a conocer nuestro nuevo Plan anual, uniendo veterinaria, peluquería y/o alimento para facilitar el cuidado de tus regalones. Lo creamos pensando en ti
                            </p>
                            <!-- Link -->
                            <h3 style="font-family: 'M PLUS Rounded 1c', sans-serif; font-weight: bold; color: #E93333;">Muy pronto</h3>
                          </div>
                          <!-- Card content -->

                        </div>
                      <!-- Card -->
                    </div>
                </form>			  
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->
          </div>
          <!-- Content -->
        </div>
        <!-- Nombre empresa & formulario-->
    </div>
    <!--MASK-->

      
  </header>	
  <!-- HEADER END -->


  <!-- BODY START -->
  
  <main class="mt-5">

    <div class="container align-items-center">   
      
      
      <!--SECTION CPF START-->
      <section id="cpf" class="container my-5">

          <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 mb-lg-0 text-center">
              <div class="row" id="centrar">
                  <div class="col-lg-12">
                      <h2 class="title my-0">¿Qué es cuidados Pets Flexible?</h2>
                  </div>
                  <div class="col-lg-12">
                    <hr class="ra d-inline-block">
                  </div>
                  <div class="col-lg-7">
                      <p class="grey-text">Te invitamos a conocer nuestro nuevo Plan anual, uniendo veterinaria, peluquería y/o alimento para facilitar el cuidado de tus regalones. Lo creamos pensando en ti
                      </p>
                  </div>
              </div>
              
            </div>
          </div>

          <!-- Grid row -->
          <div class="row my-4">

            <!-- Grid column -->
            <div class="col-lg-5 mb-3">

              <!-- Featured image -->
              <div class="view overlay rounded mb-lg-0 mb-4" id="centrar">
                  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                      <!--Indicators-->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                      </ol>
                      <!--/.Indicators-->
                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                          <img class="d-block" src="img/servicioVeterinaria.PNG"
                            alt="First slide" style="width: 100%; height: auto;">
                        </div>
                        <!--/First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                          <img class="d-block" src="img/servicioEstetico.PNG"
                            alt="Second slide" style="width: 100%; height: auto;">
                        </div>
                        <!--/Second slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block" src="img/servicioAlimento.PNG"
                              alt="Second slide" style="width: 100%; height: auto;">
                          </div>
                          <!--/Second slide-->



                      </div>
                      <!--/.Slides-->
                      <!--Controls-->
                      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                      <!--/.Controls-->
                    </div>
                <!-- <img class="img-fluid" src="img/veterinaria.PNG" alt="Sample image" width="300" height="500"> -->
              </div>

            </div>
            <!-- Grid column -->

            <div class="col-lg-7 col-md-12 mb-lg-0 my-0" id="centrar">                
              <div class="my-0 row" id="centrar">

                <div class="col-lg-12">
                    <h5 class="sub-title"> Veterinaria</h5>
                </div>
                <div class="col-lg-12 mb-4">
                  <p class="grey-text">En esta sección podrás encontrar atención veterinaria calificada en el cual ofrecemos consultas, vacunas, antiparasitarios internos, exámenes entre otros servicios
                    </p>
                </div>

                <div class="col-lg-12">
                    <h5 class="sub-title">Peluquería Canina</h5>
                </div>
                <div class="col-lg-12 mb-4">
                  <p class="grey-text">Hoy en día existe la posibilidad de embellecer a tus regalones, principalmente por que habitan dentro de nuestro hogar y compartimos espacios personales con ellos, pero principalmente porque queremos verlos hermosos.</p>
                </div>

                <div class="col-lg-12">
                    <h5 class="sub-title">Alimentación</h5>
                </div>
                <div class="col-lg-12">
                  <p class="grey-text">Al momento de contratar algún servicio de veterinaria y/o peluquería, tendrás el beneficio de comprar alimento con un excelente descuento, el objetivo es que a tu regalón no le falte alimento, es por eso que puedes programarlo con nosotros
                    </p>
                </div>
                
                <div class="row">
                  <a class="btn purple-gradient btn-rounded" href="{{ url('/login') }}">Comprar</a>
                  <a class="btn purple-gradient btn-rounded" href="{{ url('/cotizar') }}">Cotizar</a>
                {{-- <button type="button" class="btn btn-secondary btn-rounded">Comprar</button>
                <button type="button" class="btn btn-secondary btn-rounded">Cotizar</button> --}}
                </div>

                
              </div>

            </div>
              <!-- Grid column -->

              

          </div>
          <!-- Grid row -->

          




      </section>
      <hr class="my-5">
      <!--SECTION CPF END-->
      

      <!--SECTION NOSOTROS START-->
      <section id="nosotros" class="container text-left">
          <!-- Section heading -->
          <div class="row align-items-center my-5">
            <div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
              <h2 class="title ">Acerca de nosotros</h2>
              <div>
                <hr class="ra d-inline-block">
              </div>
              <!-- Section description -->
              <p class="grey-text text-left" style="text-align: justify;">
              Clínica Veterinaria Lickan Pets ofrece en la ciudad de Calama servicios médicos veterinarios de la mejor calidad y compromiso. Todos sus profesionales están altamente calificados para ofrecer una atención personalizada y un servicio integral y de calidad. Asesoramos a nuestros clientes en el cuidado y bienestar de sus mascotas, ofrecemos la mayor variedad disponible de productos farmacéuticos, alimenticios y accesorios a su elección. Siempre ofreciendo a nuestros clientes un servicio accesible cómodo y amable.
              </p>
              <br>
              <p class="grey-text text-left" style="text-align: justify;">
                Orientar y fomentar la prevención de enfermedades zoonoticas y entre mascotas, utilizando protocolos actualizados, productos de excelencia e innovación tecnológica en el sistema operativo de Lickan Pets.
              </p>
            </div>
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div id="map-container" class="map-container z-depth-3" style="height :400px;"></div>
            </div>
          </div>
          <!-- Grid row -->
      </section>
      <hr class="my-5">
      <!--SECTION NOSOTROS END-->
  
        
      <!--SECTION EQUIPO START-->
      <section id="equipo" class="container text-center">
        <div class="row align-items-cente">
          <div class="col-lg-12 col-md-12 mb-lg-0">
            <h2 class="title ">Nuestro equipo</h2>
            <div>
              <hr class="ra d-inline-block">
            </div>
          </div>
        </div>
        
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 my-4">
              <i class="fas fa-user-tie fa-4x green-text wow zoomInDown slow" data-wow-delay="0.0s"></i>
              <h5 class="font-weight-bold my-4 sub-title">Adminitradores</h5>
              <p class="grey-text my-0">Maria Eliana Suarez</p>
              <p class="grey-text my-2">Maria Fernanda Retamal</p>
            </div>
            <!-- Grid column -->
        
            <!-- Grid column -->
            <div class="col-md-4 my-4">    
              <i class="fas fa-user-md fa-4x blue-text wow zoomInDown slow" data-wow-delay="0.2s"></i>
              <h5 class="font-weight-bold my-4 sub-title">Veterinarios</h5>
              <p class="grey-text my-0">Maria Fernanda Retamal, M.V. Universidad de Concepción, Chillán.</p>
              <p class="grey-text my-0">Maria Eliana Suarez, M.V. Universidad de las Américas, Viña del Mar.</p>
              <p class="grey-text my-0">Fernando Manuel Muñoz, M.V. Universidad de Concepción, Chillán.</p>    
            </div>
            <!-- Grid column -->
        
            <!-- Grid column -->
            <div class="col-md-4 my-4">  
                <i class="fas fa-user fa-4x orange-text wow zoomInDown slow" data-wow-delay="0.4s"></i>
              <h5 class="font-weight-bold my-4 sub-title">Peluqueras</h5>
              <p class="grey-text my-0">Kristel Ordinola</p>
            </div>
            <!-- Grid column -->
        
        </div>
        <!-- Grid row -->
      </section>
      <hr class="my-5">
      <!--SECTION EQUIPO END-->
  
      <!--SECTION DIFERENCIAS START-->
      <section id="diferencia" class="container my-3">
        <!-- Section heading -->
        <div class="row" align="Right">
          <div class="col-lg-12 col-md-12 mb-lg-0 mb-4">
            <h2 class="title ">¿Qué nos diferencia?</h2>
            <div>
              <hr class="ra d-inline-block my-0">
            </div>
          </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6" id="centrar" style="padding-bottom: 10px"> 
                <!--Image-->
                <img src="https://www.seguroscatalanaoccidente.com/blog/assets/multimedia/2017/07/perro-o-gato.jpg" alt="Sample project image" class="img-fluid rounded z-depth-3">
            </div>

            <div class="col-lg-6 col-md-12 mb-lg-0 my-0" align="Right">
              
                <div class="my-4">
                  <h5 class="sub-title"><i class="fas fa-thumbtack red-text"></i> Misión</h5>
                  <p class="grey-text">Orientar y fomentar la prevención de enfermedades infecciosas a humanos y entre mascotas, utilizando protocolos adecuados productos de excelencia e innovación tecnológica en el sistema operativo de Lickan Pets.</p>
                </div>
                <div class="my-0">
                  <h5 class="sub-title"><i class="fas fa-eye red-text"></i> Visión</h5>
                  <p class="grey-text">
                    Entregar un servicio de calidad, priorizando el bienestar animal y las buenas prácticas hacia éstos, además de promover la relación dueño-mascota.
                  </p>
                </div>
                <div class="my-0">
                  <h5 class="sub-title"><i class="fas fa-hands-helping red-text"></i> Valores</h5>
                  <p class="grey-text">
                    Dentro de nuestros valores destacan el amor, respeto y dedicación hacia nuestros pacientes. La laboriosidad, responsabilidad y perseverancia para alcanzar nuestras metas como equipo Lickan Pets.
                  </p>
                </div>
            </div>
        </div>
        <!-- Grid row -->
      </section>
      <hr class="my-5">
      <!--SECTION DIFERENCIAS END-->
  
      <!--SECTION SERVICIOS START-->
      <section id="servicios" class="container my-3">

        <div class="row align-items-cent text-center">
            <div class="col-lg-12 col-md-12 mb-lg-0 mb-4">
              <h2 class="title ">Nuestros Principales Servicios</h2>
              <div>
                <hr class="ra d-inline-block">
              </div>
            </div>
          </div>
      
        <!-- Grid row -->
        <div class="row" style="padding-bottom: 40px">
      
          <!-- Grid column -->
          <div class="col-md-4">                
              <div class="my-5 wow fadeInUp slow" data-wow-delay="0.1s">
                <h5 class="sub-title"><i class="fas fa-clinic-medical red-text"></i> Clínica Veterinaria</h5>
                <p class="grey-text text-left">Servicio realizado por médicos veterinarios en las dependencias de la clínica veterinaria Lickan Pets, los cuales tienen en común el amor y compromiso por tus mascotas regalonas.</p>
              </div>
              <div class="my-5 wow fadeInUp slow" data-wow-delay="0.3s">
                <h5 class="sub-title"><svg class="svg-inline--fa fa-ambulance fa-w-20 red-text" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ambulance" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h16c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm144-248c0 4.4-3.6 8-8 8h-56v56c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8v-56h-56c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h56v-56c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v56h56c4.4 0 8 3.6 8 8v48zm176 248c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path></svg><!-- <i class="fas fa-ambulance red-text"></i> --> Clínica Veterinaria Móvil</h5>
                <p class="grey-text text-left">
                    Atención ambulatoria por nuestros médicos veterinarios hasta su domicilio, con un equipamiento adecuado para un mejor trato y atención de su mascota.
                </p>
              </div>
              <div class="my-0 wow fadeInUp slow" data-wow-delay="0.6s">
                <h5 class="sub-title"><svg class="svg-inline--fa fa-cut fa-w-14 red-text" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cut" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M278.06 256L444.48 89.57c4.69-4.69 4.69-12.29 0-16.97-32.8-32.8-85.99-32.8-118.79 0L210.18 188.12l-24.86-24.86c4.31-10.92 6.68-22.81 6.68-35.26 0-53.02-42.98-96-96-96S0 74.98 0 128s42.98 96 96 96c4.54 0 8.99-.32 13.36-.93L142.29 256l-32.93 32.93c-4.37-.61-8.83-.93-13.36-.93-53.02 0-96 42.98-96 96s42.98 96 96 96 96-42.98 96-96c0-12.45-2.37-24.34-6.68-35.26l24.86-24.86L325.69 439.4c32.8 32.8 85.99 32.8 118.79 0 4.69-4.68 4.69-12.28 0-16.97L278.06 256zM96 160c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32zm0 256c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32z"></path></svg><!-- <i class="fas fa-cut red-text"></i> --> Peluquería</h5>
                <p class="grey-text text-left">
                    Estética canina, sin uso de anestésicos y en tiempos cortos para disminuir el estrés de sus mascotas.
                </p>
              </div>
      
          </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="col-md-4 text-Rigft" id="centrar" style="padding-bottom: 30px">
            <img class="img-fluid" src="/img/juntos.PNG" alt="Sample image" style="visibility: visible; animation-name: zoomIn; animation-delay: 0s;">
          </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="col-md-4" >
      
            <div class="my-5 wow fadeInUp slow" data-wow-delay="0.1s" align="Right">
              <h5 class="sub-title">Farmacia 
                <svg class="svg-inline--fa fa-notes-medical fa-w-12 red-text" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="notes-medical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 40c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm96 304c0 4.4-3.6 8-8 8h-56v56c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8v-56h-56c-4.4 0-8-3.6-8-8v-48c0-4.4 3.6-8 8-8h56v-56c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v56h56c4.4 0 8 3.6 8 8v48zm0-192c0 4.4-3.6 8-8 8H104c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h176c4.4 0 8 3.6 8 8v16z"></path></svg><!-- <i class="fas fa-notes-medical red-text"></i> --></h5>
              <p class="grey-text text-Rigft">
                  Venta de una amplia variedad de medicamentos veterinarios para el bienestar de su mascota, deteniendo o previniendo enfermedades o aliviar síntomas.
              </p>
            </div>
            <div class="my-5 wow fadeInUp slow" data-wow-delay="0.3s" align="Right">
              <h5 class="sub-title">Pet Shop <svg class="svg-inline--fa fa-paw fa-w-16 red-text" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paw" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 224c-79.41 0-192 122.76-192 200.25 0 34.9 26.81 55.75 71.74 55.75 48.84 0 81.09-25.08 120.26-25.08 39.51 0 71.85 25.08 120.26 25.08 44.93 0 71.74-20.85 71.74-55.75C448 346.76 335.41 224 256 224zm-147.28-12.61c-10.4-34.65-42.44-57.09-71.56-50.13-29.12 6.96-44.29 40.69-33.89 75.34 10.4 34.65 42.44 57.09 71.56 50.13 29.12-6.96 44.29-40.69 33.89-75.34zm84.72-20.78c30.94-8.14 46.42-49.94 34.58-93.36s-46.52-72.01-77.46-63.87-46.42 49.94-34.58 93.36c11.84 43.42 46.53 72.02 77.46 63.87zm281.39-29.34c-29.12-6.96-61.15 15.48-71.56 50.13-10.4 34.65 4.77 68.38 33.89 75.34 29.12 6.96 61.15-15.48 71.56-50.13 10.4-34.65-4.77-68.38-33.89-75.34zm-156.27 29.34c30.94 8.14 65.62-20.45 77.46-63.87 11.84-43.42-3.64-85.21-34.58-93.36s-65.62 20.45-77.46 63.87c-11.84 43.42 3.64 85.22 34.58 93.36z"></path></svg><!-- <i class="fas fa-paw red-text"></i> --></h5>
              <p class="grey-text text-Rigft">
                  Venta de juguetes, arneses, correas, platos, caniles de transporte de la mejor calidad, entre otros, todo lo que tu regalón necesita para distraerse y complementar su calidad de vida.
              </p>
            </div>
            <div class="my-5 wow fadeInUp slow" data-wow-delay="0.6s" align="Right"> 
              <h5 class="sub-title">Alimetación <svg class="svg-inline--fa fa-bone fa-w-20 red-text" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M598.88 244.56c25.2-12.6 41.12-38.36 41.12-66.53v-7.64C640 129.3 606.7 96 565.61 96c-32.02 0-60.44 20.49-70.57 50.86-7.68 23.03-11.6 45.14-38.11 45.14H183.06c-27.38 0-31.58-25.54-38.11-45.14C134.83 116.49 106.4 96 74.39 96 33.3 96 0 129.3 0 170.39v7.64c0 28.17 15.92 53.93 41.12 66.53 9.43 4.71 9.43 18.17 0 22.88C15.92 280.04 0 305.8 0 333.97v7.64C0 382.7 33.3 416 74.38 416c32.02 0 60.44-20.49 70.57-50.86 7.68-23.03 11.6-45.14 38.11-45.14h273.87c27.38 0 31.58 25.54 38.11 45.14C505.17 395.51 533.6 416 565.61 416c41.08 0 74.38-33.3 74.38-74.39v-7.64c0-28.18-15.92-53.93-41.12-66.53-9.42-4.71-9.42-18.17.01-22.88z"></path></svg><!-- <i class="fas fa-bone red-text"></i> --></h5> 
              <p class="grey-text text-Right">
                  Venta de alimentos premium de la línea de purina, en vitrina y por encargo, para que su mascota dependiendo su edad tenga una nutrición adecuada.
              </p>
            </div>

        </div>
        <!-- Grid column -->
      
        </div>
        <!-- Grid row -->
      
      </section>
      <!--SECTION SERVICIOS START-->

    </div>

  </main>
  <!-- BODY END -->

  <footer class="page-footer font-small black lighten-3 pt-4">

    <div class="container" id="centrar">      
           
            <div class="row">

              <div class="col-md-4 text-center">
                <p>
                  <i class="fas fa-home mr-3"></i> Av. Chorrillos 1759 local 1064 portal jumbo Calama</p>
              </div>
              <div class="col-md-4 text-center">
                <p>
                  <i class="fas fa-clock mr-3"></i> Lun-Dom, 09:00 - 21:00 hrs (Festivos Irrenunciables, Cerrado)</p>
              </div>
              <div class="col-md-4 text-center">
                <p>
                  <i class="fas fa-phone mr-3"></i> +569 48501762</p> 
              </div>
        </div>
    </div>
    
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#"> LickanPets.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>

@endsection 