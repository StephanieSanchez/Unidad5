 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ url('/inicio') }}" class="nav-link active">
              <i class="fa fa-home"></i>
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-paw"></i>
              <p>
                Pacientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview" id="quita2">
                <a href="{{ url('/createProfile') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar perfil</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="{{ url('/listaPerfiles') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar perfil</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open" id="quita3">
            <a href="#" class="nav-link active">
              <i class="fas fa-medkit"></i>
              <p>
                Consultas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" >
              <li class="nav-item has-treeview">
                <a href="{{url('/createConsult')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro consultas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open" id="quita4">
            <a href="#" class="nav-link active">
              <i class="fas fa-book"></i>
              <p>
                Agenda
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview" >
                <a href="{{ url('/createCita') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de citas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview" id="quita5">
            <a href="{{ url('/historico') }}" class="nav-link active">
              <i class="fa fa-signal" aria-hidden="true"></i>
              <p>Historíco</p>
            </a>
          </li>

        
              <li class="nav-item has-treeview">
                <a href="{{url('/borrarcookie')}}" class="nav-link active">
                  <i class="fa fa-arrow-left"></i>
                  <p>Ingresar con otra cuenta</p>
                </a>
              </li>
          <li class="nav-item has-treeview">
          <a href="{{url('/salir')}}" class="nav-link active">
              <i class="fa fa-arrow-left"></i>
              <p>Salir</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 
    <script  type="text/javascript">
  if({{session('tipoUsuario')}}==1){
   
  }
  else if({{session('tipoUsuario')}}==2){
    document.getElementById("quita3").style.display = "none";
  }
  else if({{session('tipoUsuario')}}==3){
    document.getElementById("quita2").style.display = "none";
    document.getElementById("quita3").style.display = "none";
    document.getElementById("quita4").style.display = "none";
    document.getElementById("quita5").style.display = "none";
  }
</script>
 
 
 
  </aside>
 