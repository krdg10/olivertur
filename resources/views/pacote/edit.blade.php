@include('layouts.head')
@include('layouts.header_mini')
<!-- por nav -->
<div class="container">
    <h2 class="d-flex justify-content-center">Editar Pacote</h2>
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
            <form method="POST" action="{{ route('pacotes.update', $pacote->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="text" placeholder="Nome - Título do Pacote" name="nome" value="{{ $pacote->nome }}" class="form-control" maxlength="30" required>
                <textarea type="text" placeholder="Condições - As condições gerais. O que ele tem, vai fazer, etc." name="condicoes" class="form-control" maxlength="500" required rows="5">{{ $pacote->condicoes }}</textarea>
                <textarea type="text" placeholder="Inclui - Os benefícios do pacote." name="inclui" class="form-control" maxlength="500" required rows="5">{{ $pacote->inclui }}</textarea>
                <textarea type="text" placeholder="Não Inclui - Coisas que ele não tem." name="n_inclui" class="form-control" maxlength="500" required rows="5">{{ $pacote->n_inclui }}</textarea>
                <textarea type="text" placeholder="Mais informações - mais informações relacionadas a viagem mas não relacionada ao pacote." name="maisinformacoes" class="form-control" maxlength="500" required rows="5">{{ $pacote->maisinformacoes }}</textarea>
                <input type="text" placeholder="Pagamento - Formas: a vista, prazo." value="{{ $pacote->pagamento }}" name="pagamento" class="form-control" maxlength="150">
                <input type="text" placeholder="Preço - Valor do pacote. Não colocar R$" value="{{ $pacote->preco }}" name="preco" class="form-control" maxlength="25" required>
                <input type="number" placeholder="Parcelas - Quantia de parcelas." value="{{ $pacote->parcelas }}" name="parcelas" class="form-control" required>
                <input type="text" placeholder="Data - Toda semana, 24/10/2019 até 24/10/2019, etc." value="{{ $pacote->data }}" name="data" class="form-control" maxlength="50">
                <input type="text" placeholder="Característica 1 - Que vai ser exibido no card." value="{{ $pacote->caracteristica1 }}" name="caracteristica1" class="form-control" maxlength="30">
                <input type="text" placeholder="Característica 2 - Que vai ser exibido no card." value="{{ $pacote->caracteristica2 }}" name="caracteristica2" class="form-control" maxlength="30">
                <input type="text" placeholder="Característica 3 - Que vai ser exibido no card." value="{{ $pacote->caracteristica3 }}" name="caracteristica3" class="form-control" maxlength="30">
                <div class="d-flex justify-content-center" id="formFooter">
                    <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Editar </button>
                    <button class="fadeIn fourth btn btn-primary" href="{{ route('pacotes.destroy', $pacote->id) }}"
                        onclick="event.preventDefault();
                        document.getElementById('delete-form').submit();"> 
                        Apagar
                    </button>
                </div>

            </form>
            <form id="delete-form" method="POST" action="{{ route('pacotes.destroy', $pacote->id) }}" enctype="multipart/form-data" style="display:none;">
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
        <form id="delete-form" method="POST" action="{{ route('fotos.store_pacote', $pacote->id) }}" enctype="multipart/form-data">
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
                    <img class="card-img-top img-thumbnail img-fluid" src="/storage/{{ $foto->url }}" alt="Card image cap">
                    <div class="card-body">
                        <form method="POST" action="{{ route('fotos.update', $foto->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input type="text" placeholder="Nome da Foto - Legenda e Alt da foto." name="nomeFoto" value="{{$foto->nome}}" class="form-control" maxlength="50" required>
                            <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Atualizar </button>
                            <button class="fadeIn fourth btn btn-primary" href="{{ route('fotos.destroy', $foto->id) }}" 
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