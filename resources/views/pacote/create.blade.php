@include('layouts.head')
@include('layouts.header_mini')
<!-- por nav -->
<div class="container">
    <h2 class="d-flex justify-content-center">Adicionar Pacote</h2>
    <hr>
    <div class="col-lg-12 d-flex justify-content-center">
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
                <input type="text" placeholder="Nome" name="nome" class="form-control">
                <textarea type="text" placeholder="Condições" name="condicoes" class="form-control"></textarea>
                <textarea type="text" placeholder="Inclui" name="inclui" class="form-control"></textarea>
                <textarea type="text" placeholder="Não Inclui" name="n_inclui" class="form-control"></textarea>
                <input type="text" placeholder="Pagamento" name="pagamento" class="form-control">
                <input type="text" placeholder="Preço" name="preco" class="form-control">
                <input type="number" placeholder="Parcelas" name="parcelas" class="form-control">
                <input type="text" placeholder="Data (Exemplo: Toda semana, 24/10/2019 até 24/10/2019, etc.)" name="data" class="form-control">
                <input type="text" placeholder="Característica 1" name="caracteristica1" class="form-control">
                <input type="text" placeholder="Característica 2" name="caracteristica2" class="form-control">
                <input type="text" placeholder="Característica 3" name="caracteristica3" class="form-control">
                <input type="file" aria-label="foto" id="foto" name="fotos[]" class="form-control" multiple />
                <div class="d-flex justify-content-center" id="formFooter">
                    <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Salvar </button>
                </div>

            </form>
        </div>
    </div>
</div>

@include('layouts.footer')