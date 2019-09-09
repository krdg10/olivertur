@extends('layouts.app')

@section('content')
  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Built with Bootstrap 4</h2>
          <p class="text-white-50">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
            <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
        </div>
      </div>
      <img src="img/ipad.png" class="img-fluid" alt="">
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="data:image/jpeg;base64,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" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Shoreline</h4>
            <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="http://img.labnol.org/di/high-quality-photo.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Misty</h4>
                <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="https://wallpaperbro.com/img/76346.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Mountains</h4>
                <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <h1 class="text-white mb-5">Blog</h1>
          <h2 class="text-white mb-5">Conheça nossos relatos!</h2>

          <div class="card-deck">
            @foreach($posts as $post)
              <div class="card">
                <a href="/blog/{{$post->id}}"><img class="card-img-top" src="/storage/{{ $post->thumbnail->url }}" alt="Card image cap"></a>
                <div class="card-body">
                  <a href="/blog/{{$post->id}}"><h5 class="card-title">{{ $post->titulo }}</h5></a>
                  <p class="card-text"><small class="text-muted">{{ $post->autor->name }}</small></p>
                  <p class="card-text">{{ $post->previa }}</p>
                  <!--<p class="card-text"><small class="text-muted">{{ $post->tag }}</small></p>-->
                  <p class="card-text"><small class="text-muted">{{ $post->data }}</small></p>
                </div>
              </div>
            
            @endforeach
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
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
