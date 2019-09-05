<!-- Title -->
<a href="/blog/{{$post->id}}"><h1 class="mt-4">{{$post->titulo}}</h1></a>
<!-- Author -->
<p class="lead">
by
<a href="/blog/autor/{{$post->autor->name}}">{{$post->autor->name}}</a>
</p>
<p class="lead">
Categoria
<a href="/blog/categoria/{{$post->tag}}">{{$post->tag}}</a>
</p>
<hr>
<!-- Date/Time -->
<p>Posted on {{$post->data}}</p>
<hr>