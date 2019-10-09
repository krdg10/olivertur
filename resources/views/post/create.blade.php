@include('layouts.head')
@include('layouts.header_mini')
<!-- por nav -->
<div class="container bg-black border-radius">
    <h2 class="d-flex justify-content-center text-white">Adicionar Post</h2>
    <hr>
    <div class="col-lg-12 justify-content-center">
        <div id="formContent">
            @include('layouts.messages')
            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" placeholder="Título do post." name="titulo" class="form-control" maxlength="30" required>
                    <small id="tituloHelp" class="form-text text-muted">Obrigatório. Máximo 30 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="tag">Categoria</label>
                    <select name="tag" class="form-control" required>
                        <option selected>Selecione Uma Categoria</option> 
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
                    <textarea type="text" placeholder="Prévia - Textinho que vai ficar na listagem de todos os posts." name="previa" class="form-control" maxlength="120" required rows="10"></textarea>
                    <small id="previaHelp" class="form-text text-muted">Obrigatório. Máximo 120 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="texto">Texto</label>
                    <textarea type="text" placeholder="Texto - O conteúdo do post." name="texto" class="form-control" required rows="10"></textarea>
                    <small id="textoHelp" class="form-text text-muted">Obrigatório.</small>
                </div>
                <div class="form-group">
                    <label for="fotos">Fotos</label>
                    <input type="file" aria-label="foto" id="foto" name="fotos[]" class="form-control" accept="image/x-png, image/gif, image/jpeg, image/jpg" multiple required />
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