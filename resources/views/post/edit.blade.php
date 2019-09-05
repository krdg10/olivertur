@include('layouts.head')
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
        <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="text" placeholder="Título" name="titulo" value="{{$post->titulo}}" class="form-control">
            <input type="text" placeholder="Prévia" name="previa" value="{{$post->previa}}" class="form-control">
            <input type="text" placeholder="Texto" name="texto" value="{{$post->texto}}" class="form-control">
            <input type="text" placeholder="Tag" name="tag" value="{{$post->tag}}" class="form-control">
            <div>
                <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Editar </button>
            </div>

        </form>
        <form method="POST" action="{{ route('posts.destroy', $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <button type="submit" id="submit" class="fadeIn fourth btn btn-primary"> Apagar </button>
        </form>
    </div>
</div>

@include('layouts.footer')