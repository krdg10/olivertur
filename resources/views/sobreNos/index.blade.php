@include('layouts.head')
@include('layouts.header_mini')
<div class="container card" id="containerPacote">
    <div class="row margin">
      <!-- Post Content Column -->
        <div class="col-12 col-sm-12 col-md-7 col-lg-6">
            <h2>Sobre Nós</h2>
                <div class="row">
                    <div class="col text-justify">
                     A OliverTur é uma empresa que presta serviços na área de turismo e transporte fundada em 2003, está há pouco mais de 15 anos atuando no ramo. Oferece pacotes e destinos que atendam o público, com passeios ecológicos, city tour, turismo contemplativo, entre outros. Os principais destinos que a empresa oferece serviços são o Pantanal Sul e excursões na Bolívia e Peru. 

                        A OliverTur trabalha com o turismo personalizado. A empresa leva em consideração as demandas, necessidades, perfil e orçamento do cliente para realizar o planejamento e organização da viagem, para que seja a viagem ideal para o seu cliente. 
                        Antes de oferecer qualquer produto ou serviço, uma equipe da OliverTur realiza o roteiro de viagem para garantir a qualidade do serviço, fazendo diminuir insatisfações e problemas gerais. 
                        
                     Esperamos você para organizarmos sua viagem, entre em contato por email ou pelo Mensseger. Confira nossos destinos e pacotes, entre em contato conosco. 
                    </div>
                    
                </div>
                
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-6">
            <div id="slidePacote" class="carousel slide" data-ride="carousel">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                       <div class="carousel-item active">
                            <img class="img-fluid rounded" style="height: 300px; width: 900px;" src="LogoOficial.jpg" alt="alt">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid rounded" style="height: 300px; width: 900px;" src="empresa1.jpeg" alt="alt">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid rounded" style="height: 300px; width: 900px;" src="empresa2.jpeg" alt="alt">
                        </div> 
                        <div class="carousel-item">
                            <img class="img-fluid rounded" style="height: 300px; width: 900px;" src="empresa3.jpeg" alt="alt">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid rounded" style="height: 300px; width: 900px;" src="empresa4.jpeg" alt="alt">
                        </div> 
                        <div class="carousel-item">
                            <img class="img-fluid rounded" style="height: 300px; width: 900px;" src="empresa5.jpeg" alt="alt">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slidePacote" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#slidePacote" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <nav>
        <div class="nav nav-tabs margin" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-equipe" data-toggle="tab" href="#equipe" role="tab" aria-controls="equipe" aria-selected="true">Equipe</a>
            <a class="nav-item nav-link" id="nav-parceiros" data-toggle="tab" href="#parceiros" role="tab" aria-controls="parceiros" aria-selected="false">Parceiros</a>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="equipe" role="tabpanel" aria-labelledby="nav-equipe">
            <ul class="list-unstyled mb-0">
                <li>Erlon Gome</li>
                <li>Lídia Pedrosa</li>
                <li>Francisco Pedrosa</li>
                <li>Marlon de Oliveira</li>
                <li>Jaime Gomes</li>
                <li>Ruth</li>
                <li>Marianella Ortiz</li>
                <li>Waldir Padilha</li>
            </ul>
        </div>
        <div class="tab-pane fade" id="parceiros" role="tabpanel" aria-labelledby="nav-parceiros">
            <ul class="list-unstyled mb-0">
                <li><a href="http://www.ibama.gov.br/">Ibama</a></li>
                <li><a href="https://www.embrapa.br/">Embrapa</a></li>
                <li><a href="https://www.imasul.ms.gov.br/">IMASUL</a></li>
                <li><a href="http://www.eb.mil.br/web/centro-de-comunicacao-social-do-exercito/271">17<code>°</code> BFront</a></li>
                <li><a href="https://www.guiamais.com.br/corumba-ms/associacoes-e-organizacoes/associacoes-de-classe/14278348-2/acert-associacao-corumbaense-das-empresas-de-turismo">Acert</a></li>
                <li><a href="http://www.abav.com.br/">ABAV</a></li>
                <li><a href="http://www.embratur.gov.br/">Embratur</a></li>
            </ul>
        </div>
    </div>
</div>
@include('layouts.footer')