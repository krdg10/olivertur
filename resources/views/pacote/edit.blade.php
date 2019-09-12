@include('layouts.head')
@include('layouts.header_mini')
<!-- por nav -->
<div>
    <div>
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
        <hr>
        <form method="POST" action="{{ route('pacotes.update', $pacote->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="text" placeholder="Nome" name="nome" value="{{ $pacote->nome }}" class="form-control">
            <input type="text" placeholder="Condições" value="{{ $pacote->condicoes }}" name="condicoes" class="form-control">
            <input type="text" placeholder="Inclui" value="{{ $pacote->inclui }}" name="inclui" class="form-control">
            <input type="text" placeholder="Não Inclui" value="{{ $pacote->n_inclui }}" name="n_inclui" class="form-control">
            <input type="text" placeholder="Pagamento" value="{{ $pacote->pagamento }}" name="pagamento" class="form-control">
            <input type="text" placeholder="Preço" value="{{ $pacote->preco }}" name="preco" class="form-control">
            <input type="number" placeholder="Parcelas" value="{{ $pacote->parcelas }}" name="parcelas" class="form-control">
            <input type="text" placeholder="Data (Exemplo: Toda semana, 24/10/2019 até 24/10/2019, etc.)" value="{{ $pacote->data }}" name="data" class="form-control">
            <input type="text" placeholder="Característica 1" value="{{ $pacote->caracteristica1 }}" name="caracteristica1" class="form-control">
            <input type="text" placeholder="Característica 2" value="{{ $pacote->caracteristica2 }}" name="caracteristica2" class="form-control">
            <input type="text" placeholder="Característica 3" value="{{ $pacote->caracteristica3 }}" name="caracteristica3" class="form-control">
            <div>
                <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Editar </button>
            </div>

        </form>
        <form method="POST" action="{{ route('pacotes.destroy', $pacote->id) }}" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Apagar </button>
        </form>
        <div class="card-deck">
            @foreach($fotos as $foto)
                    <div class="card">
                    <img class="card-img-top" src="/storage/{{ $foto->url }}" alt="Card image cap">
                        <div class="card-body">
                        <form method="POST" action="{{ route('fotos.update', $foto->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input type="text" placeholder="Nome da Foto" name="nomeFoto" value="{{$foto->nome}}" class="form-control">
                        </div>
                        <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Atualizar </button>
                        </form>
                        <form method="POST" action="{{ route('fotos.destroy', $foto->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Apagar </button>
                        </form>

                    </div>
                
            
            @endforeach
          </div>
    </div>
</div>

@include('layouts.footer')