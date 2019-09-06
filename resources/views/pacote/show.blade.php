@include('layouts.head')
@php
    $cont=0;
@endphp
<div class="container">
    <div class="row">
      <!-- Post Content Column -->
        <div class="col-lg-8 card">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($pacote->fotos as $fotos)
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
            <hr>
            <!-- Post Content -->
            Condições: <p align="justify" class="lead">{{$pacote->condicoes}}</p>
            Inclui: <p align="justify" class="lead">{{$pacote->inclui}}</p>
            N Inclui: <p align="justify" class="lead">{{$pacote->n_inclui}}</p>
            Pagamento: <p align="justify" class="lead">{{$pacote->pagamento}}</p>
            Preço: <p align="justify" class="lead">{{$pacote->preco}} em até {{$pacote->parcelas}}</p>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@include('layouts.footer')
