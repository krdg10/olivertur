@include('layouts.head')
@include('layouts.header_mini')
<div class="container" id="elementList">
    <h2 class="text-white text-center">Lista de Pacotes</h2>
    <table class="table table-hover table-striped background-white">
        <thead>
            <tr>
                <th>Título</th>
                <th>Ver</th>
                <th>Editar/Apagar</th>
            </tr>
                </thead>
                <tbody>
                    @if(count($pacotes)==0)
                        <h3>Nenhum Post Cadastrado</h3>
                    @endif
                    @foreach ($pacotes as $pacote)
                        <tr>
                            <td>{{$pacote->nome}}</td>
                            <td><a href="{{ url('/pacotes/'.$pacote->id) }}"> <i class="fas fa-eye"></i> </a></td>
                            <td><a href="{{ url('/pacotes/edit/'.$pacote->id) }}"> <i class="fas fa-edit"></i> </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    <div class="d-flex justify-content-center">
        {{ $pacotes->links() }}
    </div>
</div>
@include('layouts.footer')