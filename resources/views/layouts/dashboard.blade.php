<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('dashboard/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('dashboard/js/all.js')}}"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
</head>
<body class="fixed-sn white-skin grey lighten-4">
    @include('components.alerts')
	<!-- HEADER START -->
	<!--Double navigation-->
    <header>
		<!-- Sidebar navigation -->
			<div id="slide-out" class="side-nav fixed z-depth-0 border border-1 overflow">
				<div class="side-header mt-4">
					<div class="avatar mx-auto white">
						<img src="/img/juntos.png" alt="avatar mx-auto white">
					</div>
					<div class="user-profile text-center black-text">
						<p class="user-name">
							Cuidados Pets Flexible <br>
							<span class="user-type grey-text">Cliente</span>
						</p>
					</div>
				</div>
				<div class="list-group " id="lista">
					<a href="{{ url('/user-profile') }}" class="list-item mt-1 @yield('user')">
						<i class="far fa-user ml-2 mr-4 fa-fw icono"></i>Mi perfil
						<div class="list-mark"></div>
					</a>
						<a href="{{ url('/user-profile/mascota') }}" class="list-item mt-1"  @yield('mascota')>
							<i class="fas fa-paw ml-2 mr-4 fa-fw icono"></i>Mis mascotas
							<div class="list-mark"></div>
						</a>
						<a href="{{url('/user-profile/planes')}}" class="list-item mt-1" @yield('plan')>
							<i class="far fa-file-alt ml-2 mr-4 fa-fw icono"></i>Mis planes 
							<div class="list-mark"></div>
						</a>
				</div>
					<div class="sidenav-bg mask-strong"></div>
			</div>
		<!--/. Sidebar navigation -->
      	<!-- Navbar -->
      	<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav grey lighten-4 z-depth-0">
			<!-- SideNav slide-out button -->
			<div class="float-right">
				<a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
			</div>
			<!--/. SideNav slide-out button-->

			<!-- Breadcrumb-->
			<div class="breadcrumb-dn">
                <!--<img src="img/logo 1.PNG" style="width: 190px" height="50px">-->
				<!--<p>Lickan<span class="cyan-text">Pets</span></p>-->
			</div>
			<!--/. Breadcrumb-->

			<!-- Dropdown button -->
			<ul class="nav navbar-nav nav-flex-icons ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					Hola, Leandro
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item grey-text" href="#">
							<i class="fas fa-cog"></i> Configuración
						</a>
						<a class="dropdown-item grey-text" href="#">
							<i class="fas fa-bell"></i> Notificaciones
						</a>

					</div>
				</li>
			</ul>
			<!--/. Dropdown button -->
      	</nav>
      	<!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
	<!-- HEADER END -->
	<!-- Content -->
    <div class="main mt-4">
		<div class="row">
			<div class="col-lg-12">
				@yield('boton-agregar')
				<h1 class="page-title">@yield('title')</h1>
			</div>
      	</div>
		<div class="row mb-0">
			@yield('buscador')
		</div>
		<div class="row mb-0">
			@yield('contenido')
		</div>
    </div>
    <!--/. Content -->
    <script type="text/javascript" src="{{asset('dashboard/js/jquery-3.3.1.min.js')}}"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('dashboard/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('dashboard/js/mdb.js')}}"></script>
    <script type="text/javascript" src="{{asset('dashboard/js/main.js')}}"></script>
    <script>
      // SideNav Initialization
      $(".button-collapse").sideNav();
    </script>
    <script>
      $('#message').modal('show')
      $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
      };
      $.datepicker.setDefaults($.datepicker.regional['es']);
      $(function() {
        $("#datepicker").datepicker({ minDate: 0 });
      });

      $('.timepicker').timepicker({
        timeFormat: 'h:mm p',
        defaultTime: 'now +30',
        dynamic: true,
        dropdown: true,
        scrollbar: true
      });
    </script>
</body>
</html>
