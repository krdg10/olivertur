@include('layouts.head')
<div class="container">
    <div class="row">
      <!-- Post Content Column -->
      @foreach ($posts as $post)
        <div class="card col-lg-8">
            <!-- Title -->
            <h1 class="mt-4">{{$post->titulo}}</h1>
            <!-- Author -->
            <p class="lead">
            by
            <a>{{$post->autor->name}}</a>
            </p>
            <p class="lead">
            Categoria
            <a>{{$post->tag}}</a>
            </p>
            <hr>
            <!-- Date/Time -->
            <p>Posted on {{$post->data}}</p>
            <hr>
            <!-- Preview Image -->
            @php
                $cont=0;
            @endphp
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($post->fotos as $fotos)
                            @if($cont==0)
                                <div class="carousel-item active">
                                    <img class="img-fluid rounded" style="height: 300px; width: 900px;" src="/storage/{{ $fotos->url }}" alt="Imagem da Câmera">
                                </div>
                                @php
                                    $cont=1;
                                @endphp
                            @else
                                <div class="carousel-item">
                                    <img class="img-fluid rounded" style="height: 300px; width: 900px;" src="/storage/{{ $fotos->url }}" alt="Imagem da Câmera">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <!-- Talvez por Modal -->
            <hr>
            <!-- Post Content -->
            <p align="justify" class="lead">{{$post->previa}}</p>
           
        </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                </div>
            </div>
            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@include('layouts.footer')