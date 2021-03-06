@extends('plantilla')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inicio</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


  
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h4>Hospital Veterinario</h4>
        </div>
        <div class="card-body">
        <div class="row slider">
				<div class="col">
					<div class="carousel slide" id="slider" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider" data-slide-to="0" class="active"></li>
							<li data-target="#slider" data-slide-to="1"></li>
							<li data-target="#slider" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/imagen1.jpg" alt="Slide #1" class="d-block img-fluid" width="8000" height="300">
							</div>
							<div class="carousel-item">
								<img src="img/imagen2.jpg" alt="Slide #2" class="d-block img-fluid" width="8000" height="300">
							</div>
							<div class="carousel-item">
								<img src="img/imagen3.jpg" alt="Slide #3" class="d-block img-fluid" width="1000" height="400">
							</div>
						</div>

						<a href="#slider" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Anterior</span>
						</a>
						<a href="#slider" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Siguiente</span>
						</a>
					</div>
        <br>
        <div class="card-header" id="q1">
          <h4>Citas agendadas el dia de hoy: <lavel id="etiqueta_fecha"></lavel></h4>
        </div>
        <br>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 300px;" id="q2">
              <table id="table" class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                    <th>NUMERO DE EXPEDIENTE</th>
                    <th>NOMBRE DEL PACIENTE</th>
                    <th>NOMBRE DEL DUEÑO</th>
                    <th>TELÉFONO</th>
                    <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                @isset($citas)
                @foreach($citas as $cita)
                <tr>
                    <td>{{$cita->idExpediente}}</td>
                    <td>{{$cita->nombreExpediente}}</td>
                    <td>{{$cita->dueñoExpediente}}</td>
                    <td>{{$cita->telefonoExpediente}}</td>
                    <td>
                        <a href="#"  class="btn btn-danger" data-toggle="modal" data-target="#reagendar{{$cita->idConsulta}}">Reagendar</a>   
                    </td>
                </tr>
                @include('modulos.modalReagendar')
                @endforeach
                @endisset
                </tbody>
              </table>
          </div>
				</div>
			</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script  type="text/javascript">
  if({{session('tipoUsuario')}}==1){
   
  }
  else if({{session('tipoUsuario')}}==2){
  }
  else if({{session('tipoUsuario')}}==3){
    document.getElementById("q1").style.display = "none";
    document.getElementById("q2").style.display = "none";
  }
</script>
@endsection