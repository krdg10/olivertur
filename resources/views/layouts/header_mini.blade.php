<header id="header">
    <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">
        OliverTur Viagens e Turismo
      </a>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
          <li class="menu-has-children"><a href="">Destinos</a>
            <ul>
              <li><a href="#">Bonito</a></li>
              <li><a href="#">Pantanal</a></li>
              <li><a href="#">Peru</a></li>
              <li><a href="#">Bolivia</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/pacotes') }}">Pacotes</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="#">Sobre Nós</a></li>
          <li><a href="{{ url('/blog') }}">Blog</a></li>
          
          
           
          @guest
            @if (Route::has('register'))
            @endif
            @else
              <li class="menu-has-children"><a>{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul>
              <li><a href="{{ url('/novoPost') }}">Novo Post</a></li>
              <li><a href="{{ url('/novoPacote') }}">Novo Pacote</a></li>
              <li><a href="#">Lista de Posts</a></li>
              <li><a href="#">Lista de Pacotes</a></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li>
            </ul>
          </li>
          @endguest
          <!-- <li><a href="">Contact</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->

    </div>
</header><!-- #header -->