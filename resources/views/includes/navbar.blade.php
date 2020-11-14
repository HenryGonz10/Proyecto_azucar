<nav class="navbar navbar-expand-lg bg-primary rounded-0">
    <div class="container" style="display: flex; justify-content:flex-end;">
        <div>
            <ul class="navbar-nav">
                <div class="dropdown">
                    <li class="nav-item" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <a href="#" class="nav-link">
                            <div class="media align-items-center">
                                <div class="media-body ml-2 d-none d-lg-block ">
                                    <span class="mb-0 text-sm  font-weight-bold">
                                     User<br><p>Adminsitrador</p>
                                    </span>
                                </div>
                                <span class="avatar avatar-sm rounded-circle ml-2">
                                    <i class="fas fa-user-circle"></i>
                                    {{--<!--<img alt="Image placeholder" src="{{ request.user.get_image }}" style="height: 40px; width: 40px;">-->--}}
                                </span>
                            </div>
                        </a>
                    </li>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Ajustes</a>
                        <hr>
                        <a class="dropdown-item" href="#">Cerrar Sesión</a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
