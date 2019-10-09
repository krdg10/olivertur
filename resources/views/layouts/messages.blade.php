<div class="container d-flex justify-content-center">
    <div class="col">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <span class="badge badge-danger badge-pill">
                    {{ $error }}
                </span>
            @endforeach
        @endif
        @if( \Session::has('error') )
            @foreach(session()->get('error') as $key => $ms)
                <span id="{{ $key }}error" class="badge badge-danger badge-pill">
                    {{ $ms }}
                    <a id="excluir" onClick="excluirElement('{{ $key }}error')"></a>
                </span>
            @endforeach
        @endif
        @if( \Session::has('message') )
            <span id="success" class="badge badge-success badge-pill">
                {{ \Session::get('message') }}
                    <a id="excluir" onClick="excluirElement('success')"></a>
            </span>
        @endif
    </div>
</div>