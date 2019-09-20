@include('layouts.head')
@include('layouts.header_mini')
<!-- por nav -->
<div class="container">
    <h2 class="d-flex justify-content-center text-white">Adicionar Pacote</h2>
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
            <form method="POST" action="{{ route('pacotes.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 justify-content-center">
                        <input type="text" placeholder="Nome - Título do Pacote" name="nome" class="form-control" maxlength="30" required>
                        <input type="text" placeholder="Pagamento - Formas: a vista, prazo." name="pagamento" class="form-control" maxlength="150">
                        <input type="number" placeholder="Preço - Valor do pacote. Não colocar R$" name="preco" class="form-control" required min="0" max="1000000">
                        <input type="number" placeholder="Parcelas - Quantia de parcelas." name="parcelas" class="form-control" required min="0" max="1000000">
                    </div>
                    <div class="col-lg-6 justify-content-center">
                        <input type="text" placeholder="Data - Toda semana, 24/10/2019 até 24/10/2019, etc." name="data" class="form-control" maxlength="50">
                        <input type="text" placeholder="Característica 1 - Que vai ser exibido no card." name="caracteristica1" class="form-control" maxlength="30">
                        <input type="text" placeholder="Característica 2 - Que vai ser exibido no card" name="caracteristica2" class="form-control" maxlength="30">
                        <input type="text" placeholder="Característica 3 - Que vai ser exibido no card" name="caracteristica3" class="form-control" maxlength="30">
                    </div>
                </div>
                <textarea type="text" placeholder="Condições - As condições gerais. O que ele tem, vai fazer, etc." name="condicoes" class="form-control" maxlength="600" required rows="5"></textarea>
                <textarea type="text" placeholder="Inclui - Os benefícios do pacote." name="inclui" class="form-control" maxlength="600" required rows="5"></textarea>
                <textarea type="text" placeholder="Não Inclui - Coisas que ele não tem." name="n_inclui" class="form-control" maxlength="600" required rows="5"></textarea>
                <textarea type="text" placeholder="Mais informações - mais informações relacionadas a viagem mas não relacionada ao pacote." name="maisinformacoes" class="form-control" maxlength="600" required rows="5"></textarea>
                <input type="file" aria-label="foto" id="foto" name="fotos[]" class="form-control" multiple required />
                <div class="d-flex justify-content-center" id="formFooter">
                    <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Salvar </button>
                </div>

            </form>
        </div>
    </div>
</div>

@include('layouts.footer')