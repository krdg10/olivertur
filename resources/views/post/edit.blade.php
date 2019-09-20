@include('layouts.head')
@include('layouts.header_mini')
<!-- por nav -->
<div class="container">
    <h2 class="d-flex justify-content-center text-white">Editar Post</h2>
    <hr>
    <div class="col-lg-12 justify-content-center">
        <div id="formContent">
            {{-- Exibe mensagem de sucesso ou de erro caso haja. --}}
            @if( \Session::has('error') )
                @foreach(session()->get('error') as $key => $ms)
                    <span id="{{ $key }}error" class="badge badge-danger badge-pill">
                        {{ $ms }}
                        <a id="excluir" onClick="excluirElement('{{ $key }}error')"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </span>
                @endforeach
            @endif
            @if( \Session::has('message') )
                <span id="success" class="badge badge-success badge-pill">
                    {{ \Session::get('message') }}
                        <a id="excluir" onClick="excluirElement('success')"><i class="fa fa-times" aria-hidden="true"></i></a>
                </span>
            @endif
            
            <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="text" placeholder="Título do post." name="titulo" value="{{$post->titulo}}" class="form-control" maxlength="30" required>
                <textarea type="text" placeholder="Prévia - Textinho que vai ficar na listagem de todos os posts." name="previa" class="form-control" maxlength="120" required rows="10">{{$post->previa}}</textarea>
                <textarea type="text" placeholder="Texto - O conteúdo do post." name="texto" class="form-control" required rows="10">{{$post->texto}}</textarea>
                <input type="text" placeholder="Tag - a categoria do post."  name="tag" value="{{$post->tag}}" class="form-control" maxlength="25" required>
                <div class="d-flex justify-content-center" id="formFooter">
                    <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Salvar </button>
                    <button class="fadeIn fourth btn btn-danger" href="{{ route('posts.destroy', $post->id) }}"
                        onclick="event.preventDefault();
                        document.getElementById('delete-form').submit();"> 
                        Apagar
                    </button>
                </div>
            </form>
            <form id="delete-form" method="POST" action="{{ route('posts.destroy', $post->id) }}" enctype="multipart/form-data" style="display:none;">
                @csrf
                @method('delete')
            </form>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="d-flex justify-content-center">Adicionar Foto</h2>
    <hr>
    <div class="col-lg-12 d-flex justify-content-center">
        <form id="delete-form" method="POST" action="{{ route('fotos.store_post', $post->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="file" aria-label="foto" id="foto" name="fotos[]" class="form-control" multiple required/>
            <div class="d-flex justify-content-center" id="formFooter">
                <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Adicionar </button>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($fotos as $foto)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top img-thumbnail img-fluid" src="/storage/{{ $foto->url }}" alt="{{ $foto->nome }}">
                    <div class="card-body">
                        <form method="POST" action="{{ route('fotos.update', $foto->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input type="text" placeholder="Nome da Foto - Legenda e Alt da foto." name="nomeFoto" value="{{$foto->nome}}" class="form-control" maxlength="50" required>
                            <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Atualizar </button>
                            <button class="fadeIn fourth btn btn-danger" href="{{ route('fotos.destroy', $foto->id) }}" 
                                onclick="event.preventDefault();
                                document.getElementById('delete-foto{{$foto->id}}').submit();"> 
                                Apagar
                            </button>
                        </form>
                        <form id="delete-foto{{$foto->id}}" method="POST" action="{{ route('fotos.destroy', $foto->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('layouts.footer')