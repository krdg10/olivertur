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
                        <img class="img-fluid rounded" style="height: 450px; width: 900px;" src="/storage/{{ $fotos->url }}" alt="{{ $fotos->nome }}">
                    </div>
                    @php
                        $cont=1;
                    @endphp
                @else
                    <div class="carousel-item">
                        <img class="img-fluid rounded" style="height: 450px; width: 900px;" src="/storage/{{ $fotos->url }}" alt="{{ $fotos->nome }}">
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