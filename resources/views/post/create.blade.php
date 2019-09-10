@include('layouts.head')
@include('layouts.header_mini')
<!-- por nav -->
<div class="container">
    <h2 class="d-flex justify-content-center">Adicionar Post</h2>
    <hr>
    <div class="col-lg-12 d-flex justify-content-center">
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
            <input type="text" placeholder="Título" name="titulo" class="form-control">
            <textarea type="text" placeholder="Prévia" name="previa" class="form-control"></textarea>
            <textarea type="text" placeholder="Texto" name="texto" class="form-control"></textarea>
            <input type="text" placeholder="Tag" name="tag" class="form-control">
            <input type="file" aria-label="foto" id="foto" name="fotos[]" class="form-control" multiple />
            <div class="d-flex justify-content-center" id="formFooter">
                <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Salvar </button>
            </div>

        </form>
    </div>
</div>

@include('layouts.footer')