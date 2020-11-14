<!-- Sidebar -->
<nav id="navbarText" class="sidebar">
    <div class="sidebar-header">
        <ul class="navbar-nav mr-auto nav">
            <a class="navbar-brand" href="/">
                <div class="logo-image">
                    <img src="/Static/img/Logoblanco.png" class="img-fluid" style="width: 50px;">
                    <h4 class="navbar-item navbar-text text-white ml-2" href="#"> Azúcar Manager</h4>
                </div>
            </a>
        </ul>

        <hr>
    </div>

    <ul class="navbar-nav my-5">
        <li class="nav-item">
            <a class="nav-link" href="#" style="padding-left: 10%"><h4><i class="fas fa-home" style="padding-right: 25%"></i> Inicio</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="padding-left: 10%"><h4><i class="fas fa-clipboard-list" style="padding-right: 22%"></i>Produccion</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="padding-left: 10%"><h4><i class="fas fa-shopping-cart" style="padding-right: 21%"></i> Pedidos</h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="padding-left: 10%"><h4><i class="fas fa-cubes" style="padding-right: 20%"></i> Productos</h4></a>
        </li>
    </ul>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Desea cerrar sesión?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <a  href="{{ route('logout') }}" class="btn btn-danger">Si</a>
        </div>
      </div>
    </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>
