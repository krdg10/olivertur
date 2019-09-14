@extends('layouts.app')

@section('content')
  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">A equipe da OliverTur deseja Boas Vindas!</h2>
          <p class="text-white-50">Temos a disposição diversos destinos turísticos com uma grande variedade de atrativos, programações e passeios. Os principais destinos são o Pantanal Sul, Bolívia e Peru. Trabalhamos com o Turismo Personalizado, organizamos a sua viagem de acordo com seu perfil, tempo e orçamento disponível. Encontre o destino ideal para sua tão sonhada viagem! </p>
        </div>
      </div>
      <img src="img/ipad.png" class="img-fluid" alt="">
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="https://olvrtur.files.wordpress.com/2019/08/16265191_201476153660524_1764860663924253223_n.jpg" alt="" style="min-height:100%;">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Pantanal Sul</h4>
                <p class="mb-0 text-white-50">O Pantanal Sul possui uma imensa diversidade na fauna e flora. Existem na região 1.132 espécies de borboletas, 656 de aves, 122 de mamíferos, 263 de peixes e 93 de répteis. Existem diversas atrações e programações que é possivel realizar nesses destinos, como pesca, trilhas, passeios e safáris fotográficos, mergulho, observação de aves, dia de peão e hospedagem em fazendas.</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>


      

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="https://olvrtur.files.wordpress.com/2019/08/city-tour-santa-cruz-church.jpg?w=1000&h=" alt="" style="min-height:100%;">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Bolívia</h4>
                <p class="mb-0 text-white-50">A OliverTur conta com diversos destinos e passeios no nosso país vizinho, desde a região da chiquitania, onde é possivel encontrar cidades maravilhosas, igrejas construidas por jesuitas no século XVII e recantos naturais apaixonantes, até a região do altos onde há ruinas de povos pré-colombianos, deserto de sal e o lago mais altos do mundo. Aventure-se por esses destinos com a OliverTur.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="https://olvrtur.files.wordpress.com/2019/08/750_2017626123854857-1.jpg" alt="" style="min-height:100%;">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Peru</h4>
                <p class="mb-0 text-white-50">O Peru é um país da América do Sul que abriga uma parte da Floresta Amazônica e Machu Picchu, uma antiga cidade inca na cordilheira dos Andes. A região ao redor de Machu Picchu, que abrange o Vale Sagrado dos Incas, o Camino Inca e a cidade colonial de Cusco, é rica em sítios arqueológicos. </p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="signup" class="signup-section bgBlog">
    <div class="container">
      <h1 class="text-white mb-5 text-center">Blog</h1>
      <div class="row">
        @foreach($posts as $post)
          <div class="col-md-4 marginCard">
            <div class="card homeBlogCard">
              <a href="/blog/{{$post->id}}"><img class="card-img-top img-thumbnail img-fluid" src="/storage/{{ $post->thumbnail->url }}" alt="{{ $post->thumbnail->nome }}"></a>
              <div class="card-body">
                <a href="/blog/{{$post->id}}"><h5 class="card-title">{{ $post->titulo }}</h5></a>
                <p class="card-text">{{ $post->previa }}</p>
              </div>
              <div class="card-footer text-muted">
                <p class="card-text"><small class="text-muted">{{ $post->data }}</small></p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  
    <!-- Map -->
    <section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.421219220931!2d-57.66147204895967!3d-19.00115191494135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9387a091156f16c9%3A0xd88b0545e9b827d5!2sOLIVER%20TUR%20-%20AG%C3%8ANCIA%20DE%20NAVEGA%C3%87%C3%83O%2C%20VIAGENS%20%26%20TURISMO!5e0!3m2!1spt-BR!2sbr!4v1567462077668!5m2!1spt-BR!2sbr"></iframe>
    <br />
    <small>
      <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.421219220931!2d-57.66147204895967!3d-19.00115191494135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9387a091156f16c9%3A0xd88b0545e9b827d5!2sOLIVER%20TUR%20-%20AG%C3%8ANCIA%20DE%20NAVEGA%C3%87%C3%83O%2C%20VIAGENS%20%26%20TURISMO!5e0!3m2!1spt-BR!2sbr!4v1567462077668!5m2!1spt-BR!2sbr"></a>
    </small>
  </section>
@endsection
