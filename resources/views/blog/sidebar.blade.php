<!-- Sidebar Widgets Column -->
<div class="col-md-4" id="side">
   
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categorias</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">

                        <li>
                            <a href="#">Turismo Ecológico</a>
                        </li>
                        <li>
                            <a href="#">City Tour</a>
                        </li>
                        <li>
                            <a href="#">Day Use</a>

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
                            <a href="{{ route('posts.categoria', ['categoria'=>'Trilhas']) }}">Trilhas</a>

                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">

                        <li>
                            <a href="#">Bolivia Excursão</a>
                        </li>
                        <li>
                            <a href="#">Peru Excursão</a>
                        </li>
                        <li>
                            <a href="#">Fazenda Pantanal</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">Bonito Tour</a>
                        </li>
                        <li>
                            <a href="#">Trilhas</a>
                        </li>
                        <li>
                            <a href="#">Datas Comemorativas</a>
                        </li>
                    </ul>
                </div>
                                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">Pesca Pantanal</a>
                        </li>
                        <li>
                            <a href="#">Receitas</a>
                        </li>
                        <li>
                            <a href="#">Dicas de Viagem</a>

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