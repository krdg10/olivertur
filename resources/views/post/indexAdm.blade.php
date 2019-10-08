@include('layouts.head')
@include('layouts.header_mini')
<div class="container" id="elementList">
    <h2 class="text-white text-center">Lista de Posts</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card my-4">
                <h5 class="card-header">Categorias</h5>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="categoria">
                            <a href="{{ route('posts.indexAdm') }}">Todos</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.indexAdmFilter', ['categoria'=>'Turismo Ecológico']) }}">Turismo Ecológico</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.indexAdmFilter', ['categoria'=>'City Tour']) }}">City Tour</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.indexAdmFilter', ['categoria'=>'Day Use']) }}">Day Use</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.indexAdmFilter', ['categoria'=>'Bonito Tour']) }}">Bonito Tour</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.indexAdmFilter', ['categoria'=>'Trilhas']) }}">Trilhas</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.indexAdmFilter', ['categoria'=>'Excursão']) }}">Excursão</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.indexAdmFilter', ['categoria'=>'Fazenda Pantanal']) }}">Fazenda Pantanal</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.indexAdmFilter', ['categoria'=>'Pesca Pantanal']) }}">Pesca Pantanal</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.indexAdmFilter', ['categoria'=>'Receitas']) }}">Receitas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-8" id="tableAdm">
            <table class="table table-hover table-striped background-white">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Ver</th>
                        <th>Editar-Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($posts)==0)
                        <h3>Nenhum Post Cadastrado</h3>
                    @endif
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->titulo}}</td>
                            <td>{{$post->autor->name}}</td>
                            <td><a href="{{ url('/blog/'.$post->id) }}"> <i class="fas fa-eye"></i> </a></td>
                            <td><a href="{{ url('/blog/edit/'.$post->id) }}"> <i class="fas fa-edit"></i> </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        {{ $posts->onEachSide(1)->links() }}
    </div>
</div>
@include('layouts.footer')