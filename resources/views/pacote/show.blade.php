@include('layouts.head')
@php
    $cont=0;
@endphp
@include('layouts.header_mini')
<div class="container card" id="containerPacote">
    <div class="row">
      <!-- Post Content Column -->
        <div class="col-12 col-sm-12 col-md-5 col-lg-6"> 
            <h2>{{$pacote->nome}}</h2>
            @guest
                @if (Route::has('register'))
                @endif
                @else
                    <a href="/pacotes/edit/{{$pacote->id}}"><i class="fas fa-edit"></i> Editar/Apagar</a><br>
                @endguest
                <div class="row">
                    <div class="col">
                        @if($pacote->pagamento)<h5>Pagamento:</h5> <p align="justify" class="lead">{{$pacote->pagamento}}</p>@endif
                        <h5>Preço:</h5> <p align="justify" class="lead">R${{$pacote->preco}} em até {{$pacote->parcelas}}x</p>
                        @if($pacote->data)<h5>Data:</h5> <p align="justify" class="lead">{{$pacote->data}}</p>@endif
                    </div>
                    <div class="col col-lg-4">
                        @if($pacote->caracteristica1)<p align="justify" class="lead">• {{$pacote->caracteristica1}}</p>@endif
                        @if($pacote->caracteristica2)<p align="justify" class="lead">• {{$pacote->caracteristica2}}</p>@endif
                        @if($pacote->caracteristica3)<p align="justify" class="lead">• {{$pacote->caracteristica3}}</p>@endif
                    </div>
                </div>
                
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-6">
            <div id="slidePacote" class="carousel slide" data-ride="carousel">
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
                <a class="carousel-control-prev" href="#slidePacote" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#slidePacote" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-condicoes" data-toggle="tab" href="#condicoes" role="tab" aria-controls="condicoes" aria-selected="true">Condições Gerais</a>
            <a class="nav-item nav-link" id="nav-inclui" data-toggle="tab" href="#inclui" role="tab" aria-controls="inclui" aria-selected="false">Inclui</a>
            <a class="nav-item nav-link" id="nav-maisinformacoes" data-toggle="tab" href="#maisinformacoes" role="tab" aria-controls="maisinformacoes" aria-selected="false">Mais Informações</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="condicoes" role="tabpanel" aria-labelledby="nav-condicoes">
            <h5>Condições Gerais:</h5> <p align="justify" class="lead">{{$pacote->condicoes}}</p>
        </div>
        <div class="tab-pane fade" id="inclui" role="tabpanel" aria-labelledby="nav-inclui">
            <h5>Inclui:</h5> <p align="justify" class="lead">{{$pacote->inclui}}</p>
            <h5>Não Inclui:</h5> <p align="justify" class="lead">{{$pacote->n_inclui}}</p>
        </div>
        <div class="tab-pane fade" id="maisinformacoes" role="tabpanel" aria-labelledby="nav-maisinformacoes">
            <h5>Mais Informações:</h5> <p align="justify" class="lead">{{$pacote->maisinformacoes}}</p>
        </div>
    </div>
</div>
<!-- /.container -->
@include('layouts.footer')
