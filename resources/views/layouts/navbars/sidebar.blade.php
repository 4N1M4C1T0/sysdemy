
<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('SYSDEMY') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">home</i>
            <p>{{ __('MENU') }}</p>
        </a>
      </li>

      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">dashboard</i>
          <p>{{ __('FUNCIONES') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
                  <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
                      <a class="nav-link" href="{{route('users.index')}}">
                          <i class="material-icons">content_paste</i>
                          <p>Usuarios</p>
                      </a>
                  </li>


                  <li class="nav-item{{ $activePage == 'cursos' ? ' active' : '' }}">
                      <a class="nav-link" href="{{route('cursos.index')}}">
                          <i class="material-icons">book</i>
                          <p>Cursos</p>
                      </a>
                  </li>


              <li class="nav-item{{ $activePage == 'pedidos' ? ' active' : '' }}">
                  <a class="nav-link" href="{{route('pedidos.index')}}">
                      <i class="material-icons">shopping_cart</i>
                      <p>Pedidos</p>
                  </a>
              </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
