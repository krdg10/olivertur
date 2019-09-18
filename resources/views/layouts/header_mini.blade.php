<header id="header">
    <div class="container">
      <!--<a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">
       OliverTur Viagens e Turismo
      </a>--->
      <a href="{{ url('/') }}"><img src="/LogoOficial.jpg" alt="Olivertur" title="Olivertur" style="width: 100px; height: 50px;"/></a>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
          <li class="menu-has-children"><a href="">Destinos</a>
            <ul>
              <li><a href="{{ url('/pantanalSul') }}">Pantanal Sul</a></li>
              <li><a href="{{ url('/peru') }}">Peru</a></li>
              <li><a href="{{ url('/bolivia') }}">Bolivia</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/pacotes') }}">Pacotes</a></li>
          <li><a href="#contact">Contato</a></li>
          <li><a href="{{ url('/sobreNos') }}">Sobre Nós</a></li>
          <li><a href="{{ url('/blog') }}">Blog</a></li>
          
          
           
          @guest
            @if (Route::has('register'))
            @endif
            @else
              <li class="menu-has-children"><a>{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul>
              <li><a href="{{ url('/novoPost') }}">Novo Post</a></li>
              <li><a href="{{ url('/novoPacote') }}">Novo Pacote</a></li>
              <li><a href="{{ url('/blogAdm') }}">Lista de Posts</a></li>
              <li><a href="{{ url('/pacotesAdm') }}">Lista de Pacotes</a></li>
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