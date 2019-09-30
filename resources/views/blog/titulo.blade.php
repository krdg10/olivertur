<!-- Title -->
<a href="/blog/{{$post->id}}"><h1 class="mt-4">{{$post->titulo}}</h1></a>
@guest
    @if (Route::has('register'))
    @endif
    @else
    <a href="/blog/edit/{{$post->id}}"><i class="fas fa-edit"></i> Editar/Apagar</a>
@endguest
<!-- Author -->
<p class="lead">
por
<a href="/blog/autor/{{$post->autor->name}}">{{$post->autor->name}}</a>
</p>
<p class="lead">
Categoria
<a href="/blog/categoria/{{$post->tag}}">{{$post->tag}}</a>
</p>
<hr>
<!-- Date/Time -->
<p>Postado em {{date('d/m/Y', strtotime($post->data))}}</p>
<hr>