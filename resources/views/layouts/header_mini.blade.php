<nav class="navbar navbar-expand-lg navbar-light py-3" id="sideNav">
    <div class="container">
      <a href="{{ url('/') }}"><img src="/LogoOficial.jpg" alt="Olivertur" title="Olivertur" style="width: 100px; height: 50px;"/></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Destinos <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/pantanalSul') }}">
                        Pantanal Sul 
                    </a>
                    <a class="dropdown-item" href="{{ url('/peru') }}">
                        Peru
                    </a>
                    <a class="dropdown-item" href="{{ url('/bolivia') }}">
                        Bolivia
                    </a>     
                </div>
            </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/pacotes') }}">Pacotes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/sobreNos') }}">Empresa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/blog') }}">Blog</a>
          </li>
          @guest
            @if (Route::has('register'))
            @endif
            @else
              <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/novoPost') }}">
                                Novo Post
                            </a>
                            <a class="dropdown-item" href="{{ url('/novoPacote') }}">
                                Novo Pacote
                            </a>
                            <a class="dropdown-item" href="{{ url('/blogAdm') }}">
                                Lista de Posts
                            </a>
                            <a class="dropdown-item" href="{{ url('/pacotesAdm') }}">
                                Lista de Pacotes
                            </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
        </ul>
      </div>
    </div>
</nav>