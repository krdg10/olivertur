@include('layouts.head')
@include('layouts.header_mini')
<!-- por nav -->
<div class="container bg-black border-radius">
    <h2 class="d-flex justify-content-center text-white">Adicionar Pacote</h2>
    <hr>
    <div class="col-lg-12 justify-content-center">
        <div id="formContent">
            @include('layouts.messages')
            <form method="POST" action="{{ route('pacotes.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 justify-content-center">
                        <div class="form-group">
                            <label for="nome">Nome <a class="required">*</a></label>
                            <input type="text" placeholder="Nome - Título do Pacote" name="nome" class="form-control" maxlength="30" required>
                            <small id="nomeHelp" class="form-text text-muted">Campo obrigatório. Máximo 30 caracteres.</small>
                        </div>
                        <div class="form-group">
                            <label for="pagamento">Pagamento</label>
                            <input type="text" placeholder="Pagamento - Formas: a vista, prazo." name="pagamento" class="form-control" maxlength="150">
                            <small id="pagamentoHelp" class="form-text text-muted">Máximo 150 caracteres.</small>
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço <a class="required">*</a></label>
                            <input type="number" placeholder="Preço - Valor do pacote. Não colocar R$" name="preco" step="any" class="form-control" required min="0" max="1000000">
                            <small id="precoHelp" class="form-text text-muted">Campo obrigatório. Apenas números positivos. Não colocar R$.</small>
                        </div>
                        <div class="form-group">
                            <label for="parcelas">Quantidade de Parcelas <a class="required">*</a></label>
                            <input type="number" placeholder="Parcelas - Quantia de parcelas." name="parcelas" class="form-control" required min="0" max="1000000">
                            <small id="parcelasHelp" class="form-text text-muted">Campo obrigatório. Apenas números positivos.</small>
                        </div>
                    </div>
                    <div class="col-lg-6 justify-content-center">
                        <div class="form-group">
                            <label for="data">Data</label>
                            <input type="text" placeholder="Data - Toda semana, 24/10/2019 até 24/10/2019, etc." name="data" class="form-control" maxlength="50">
                            <small id="dataHelp" class="form-text text-muted">Máximo 50 caracteres.</small>
                        </div>
                        <div class="form-group">
                            <label for="caracteristica1">Característica 1</label>
                            <input type="text" placeholder="Característica 1 - Que vai ser exibido no card." name="caracteristica1" class="form-control" maxlength="30">
                            <small id="caracteristica1Help" class="form-text text-muted">Máximo 30 caracteres.</small>
                        </div>
                        <div class="form-group">
                            <label for="caracteristica2">Característica 2</label>
                            <input type="text" placeholder="Característica 2 - Que vai ser exibido no card" name="caracteristica2" class="form-control" maxlength="30">
                            <small id="caracteristica2Help" class="form-text text-muted">Máximo 30 caracteres.</small>
                        </div>
                        <div class="form-group">
                            <label for="caracteristica3">Característica 3</label>
                            <input type="text" placeholder="Característica 3 - Que vai ser exibido no card" name="caracteristica3" class="form-control" maxlength="30">
                            <small id="caracteristica3Help" class="form-text text-muted">Máximo 30 caracteres.</small>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="condicoes">Condições <a class="required">*</a></label>
                    <textarea type="text" placeholder="Condições - As condições gerais. O que ele tem, vai fazer, etc." name="condicoes" class="form-control" maxlength="600" required rows="5"></textarea>
                    <small id="condicoesHelp" class="form-text text-muted">Campo obrigatório. Máximo 600 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="inclui">Inclui <a class="required">*</a></label>
                    <textarea type="text" placeholder="Inclui - Os benefícios do pacote." name="inclui" class="form-control" maxlength="600" required rows="5"></textarea>
                    <small id="incluiHelp" class="form-text text-muted">Campo obrigatório. Máximo 600 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="n_inclui">Não Inclui <a class="required">*</a></label>
                    <textarea type="text" placeholder="Não Inclui - Coisas que ele não tem." name="n_inclui" class="form-control" maxlength="600" required rows="5"></textarea>
                    <small id="n_incluiHelp" class="form-text text-muted">Campo obrigatório. Máximo 600 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="maisinformacoes">Mais Informações <a class="required">*</a></label>
                    <textarea type="text" placeholder="Mais informações - mais informações relacionadas a viagem mas não relacionada ao pacote." name="maisinformacoes" class="form-control" maxlength="600" required rows="5"></textarea>
                    <small id="maisinformacoesHelp" class="form-text text-muted">Campo Obrigatório. Máximo 600 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="fotos">Fotos <a class="required">*</a></label>
                    <input type="file" aria-label="foto" id="foto" name="fotos[]" class="form-control" accept="image/x-png, image/gif, image/jpeg, image/jpg" multiple required />
                    <small id="fotosHelp" class="form-text text-muted">Campo obrigatório. Arquivos nos formatos: gif, png, jpg e jpeg.</small>
                </div>
                <div class="d-flex justify-content-center" id="formFooter">
                    <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Salvar </button>
                </div>

            </form>
        </div>
    </div>
</div>

@include('layouts.footer')