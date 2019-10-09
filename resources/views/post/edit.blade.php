@include('layouts.head')
@include('layouts.header_mini')
<script>
    $( document ).ready(function() {
        $('select[name="tag"]').find('option:contains("{{$post->tag}}")').attr("selected",true);
    });
</script>

<div class="container bg-black border-radius">
    <h2 class="d-flex justify-content-center text-white">Editar Post</h2>
    <hr>
    <div class="col-lg-12 justify-content-center">
        <div id="formContent">
            @include('layouts.messages')
            <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" placeholder="Título do post." name="titulo" value="{{$post->titulo}}" class="form-control" maxlength="30" required>
                    <small id="tituloHelp" class="form-text text-muted">Obrigatório. Máximo 30 caracteres.</small>
                </div>
                <div class="form-group tag">
                    <label for="tag">Categoria</label>
                    <select name="tag" class="form-control" id="tag" required>
                        <option value="Turismo Ecológico">Turismo Ecológico</option>
                        <option value="Excursão">Excursão</option>
                        <option value="City Tour">City Tour</option>
                        <option value="Fazenda Pantanal">Fazenda Pantanal</option>
                        <option value="Day Use">Day Use</option>
                        <option value="Pesca Pantanal">Pesca Pantanal</option>
                        <option value="Bonito Tour">Bonito Tour</option>
                        <option value="Receitas">Receitas</option>
                        <option value="Trilhas">Trilhas</option>
                    </select>
                    <small id="tagHelp" class="form-text text-muted">Obrigatório.</small>
                </div>
                <div class="form-group">
                    <label for="previa">Prévia</label>
                    <textarea type="text" placeholder="Prévia - Textinho que vai ficar na listagem de todos os posts." name="previa" class="form-control" maxlength="120" required rows="10">{{$post->previa}}</textarea>
                    <small id="previaHelp" class="form-text text-muted">Obrigatório. Máximo 120 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="texto">Texto</label>
                    <textarea type="text" placeholder="Texto - O conteúdo do post." name="texto" class="form-control" required rows="10">{{$post->texto}}</textarea>
                    <small id="textoHelp" class="form-text text-muted">Obrigatório.</small>
                </div>
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
<div class="container bg-black border-radius">
    <h2 class="d-flex justify-content-center text-white">Adicionar Foto</h2>
    <hr>
    <div class="col-lg-12 d-flex justify-content-center">
        <form id="delete-form" method="POST" action="{{ route('fotos.store', ['categoria'=>'post_id', 'id'=>$post->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="fotos">Fotos</label>
                <input type="file" aria-label="foto" id="foto" name="fotos[]" class="form-control" accept="image/x-png, image/gif, image/jpeg, image/jpg" multiple required/>
                <small id="fotosHelp" class="form-text text-muted">Arquivos nos formatos: gif, png, jpg e jpeg.</small>
            </div>
            <div class="d-flex justify-content-center" id="formFooter">
                <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Adicionar </button>
            </div>
        </form>
    </div>
</div>
<div class="container margin10Top">
    <div class="row">
        @foreach($fotos as $foto)
            <div class="col-md-4">
                <div class="card marginCard">
                    <img class="card-img-top img-thumbnail img-fluid" src="/storage/{{ $foto->url }}" alt="{{ $foto->nome }}">
                    <div class="card-body">
                        <form method="POST" action="{{ route('fotos.update', $foto->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="nomeFoto">Nome da Foto</label>
                                <input type="text" placeholder="Nome da Foto - Legenda e Alt da foto." name="nomeFoto" value="{{$foto->nome}}" class="form-control" maxlength="50" required>
                                <small id="nomeFotoHelp" class="form-text text-muted">Máximo 50 caracteres.</small>
                            </div>
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