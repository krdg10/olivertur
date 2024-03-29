@include('layouts.head')
@include('layouts.header_mini')
<h2 class="text-center text-white">Pacotes</h2>
<div class="container">
    <div class="row">
        @foreach($pacotes as $pacote)
            <div class="col-md-4 marginCard">
                <div class="card pacoteCard">
                    <a href="/pacotes/{{$pacote->id}}"><img class="card-img-top img-thumbnail img-fluid" src="/storage/{{ $pacote->thumbnail->url }}" alt="{{ $pacote->thumbnail->nome }}"></a>
                    <div class="card-body">
                        <a href="/pacotes/{{$pacote->id}}"><h5 class="card-title text-center">{{ $pacote->nome }}</h5></a>
                        @if($pacote->caracteristica1)<p class="card-text text-center"><small class="text-muted">• {{ $pacote->caracteristica1 }}</small></p>@else<p class="card-text text-center"><small class="text-muted">&nbsp</small></p>@endif
                        @if($pacote->caracteristica2)<p class="card-text text-center"><small class="text-muted">• {{ $pacote->caracteristica2 }}</small></p>@else<p class="card-text text-center"><small class="text-muted">&nbsp</small></p>@endif
                        @if($pacote->caracteristica3)<p class="card-text text-center"><small class="text-muted">• {{ $pacote->caracteristica3 }}</small></p>@else<p class="card-text text-center"><small class="text-muted">&nbsp</small></p>@endif
                    </div>
                    <div class="card-footer text-muted">
                        <p class="card-text">R${{number_format($pacote->preco, 2, ',', '')}} em até {{ $pacote->parcelas }}x.</p>
                        @guest
                            @if (Route::has('register'))
                            @endif
                            @else
                            <a href="/pacotes/edit/{{$pacote->id}}"><i class="fas fa-edit"></i> Editar/Apagar</a>
                        @endguest
                    </div>
                </div>
            </div>
        @endforeach
        <div class="container d-flex justify-content-center">
            {{ $pacotes->onEachSide(1)->links() }}
        </div>
    </div>
</div>
<!-- /.container -->
@include('layouts.footer')