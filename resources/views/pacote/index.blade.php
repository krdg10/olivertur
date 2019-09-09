@include('layouts.head')
@include('layouts.header_mini')
<div class="container">
<div class="row">
        
    
        
           
                @foreach($pacotes as $pacote)
                <div class="card mb-4">
                    <a href="/pacotes/{{$pacote->id}}"><img class="card-img-top" src="/storage/{{ $pacote->thumbnail->url }}" alt="Card image cap"></a>
                    <div class="card-body">
                    <a href="/pacotes/{{$pacote->id}}"><h5 class="card-title">{{ $pacote->nome }}</h5></a>
                    <p class="card-text"><small class="text-muted">{{ $pacote->caracteristica1 }}</small></p>
                    <p class="card-text"><small class="text-muted">{{ $pacote->caracteristica2 }}</small></p>
                    <p class="card-text"><small class="text-muted">{{ $pacote->caracteristica3 }}</small></p>
                    <p class="card-text">{{$pacote->preco}} em até {{ $pacote->parcelas }}x</p>

                    </div>
                </div>
                
                @endforeach
            
       
        <div class="container d-flex justify-content-center">
            {{ $pacotes->links() }}
        </div>
    
</div></div>
<!-- /.container -->
@include('layouts.footer')