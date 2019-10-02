@include('layouts.head')
@include('layouts.header_mini')
<!-- por nav -->
<div class="container bg-black border-radius">
    <h2 class="d-flex justify-content-center text-white">Adicionar Post</h2>
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
            
            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" placeholder="Título do post." name="titulo" class="form-control" maxlength="30" required>
                    <small id="tituloHelp" class="form-text text-muted">Obrigatório. Máximo 30 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="previa">Prévia</label>
                    <textarea type="text" placeholder="Prévia - Textinho que vai ficar na listagem de todos os posts." name="previa" class="form-control" maxlength="120" required rows="10"></textarea>
                    <small id="previaHelp" class="form-text text-muted">Obrigatório. Máximo 120 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="texto">Texto</label>
                    <textarea type="text" placeholder="Texto - O conteúdo do post." name="texto" class="form-control" required rows="10"></textarea>
                    <small id="textoHelp" class="form-text text-muted">Obrigatório.</small>
                </div>
                <div class="form-group">
                    <label for="tag">Categoria</label>
                    <input type="text" placeholder="Tag - a categoria do post." name="tag" class="form-control" maxlength="25" required>
                    <small id="tagHelp" class="form-text text-muted">Obrigatório. Máximo 25 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="fotos">Fotos</label>
                    <input type="file" aria-label="foto" id="foto" name="fotos[]" class="form-control" multiple required />
                    <small id="fotosHelp" class="form-text text-muted">Obrigatório. Arquivos nos formatos: gif, png, jpg e jpeg.</small>
                </div>
                <div class="d-flex justify-content-center" id="formFooter">
                    <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Salvar </button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('layouts.footer')