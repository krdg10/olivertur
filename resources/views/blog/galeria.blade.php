<div class="container-fluid" id="galeria">
    <div class="row">
        @foreach ($post->fotos as $fotos)
            <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
                <a class="fancybox" rel="ligthbox" href="/storage/{{ $fotos->url }}">
                    <img src="/storage/{{ $fotos->url }}" alt="{{ $fotos->nome }}"/>
                    <div class="zoom"></div>
                </a>
            </div>
        @endforeach
    </div>
</div>