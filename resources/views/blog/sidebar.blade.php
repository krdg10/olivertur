<!-- Sidebar Widgets Column -->
<div class="col-md-4" id="side">
   
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categorias</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">

                        
                        <li class="categoria">
                            <a href="{{ route('posts.categoria', ['categoria'=>'Turismo Ecológico']) }}">Turismo Ecológico</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.categoria', ['categoria'=>'City Tour']) }}">City Tour</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.categoria', ['categoria'=>'Day Use']) }}">Day Use</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.categoria', ['categoria'=>'Bonito Tour']) }}">Bonito Tour</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.categoria', ['categoria'=>'Trilhas']) }}">Dicas de Viagem</a>

                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li class="categoria">
                            <a href="{{ route('posts.categoria', ['categoria'=>'Excursão']) }}">Excursão</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.categoria', ['categoria'=>'Fazenda Pantanal']) }}">Fazenda Pantanal</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.categoria', ['categoria'=>'Pesca Pantanal']) }}">Pesca Pantanal</a>
                        </li>
                        <li class="categoria">
                            <a href="{{ route('posts.categoria', ['categoria'=>'Receitas']) }}">Receitas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>