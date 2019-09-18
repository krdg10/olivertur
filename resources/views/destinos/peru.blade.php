<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
    <div id="app">
        <main>
            @include('layouts.nav')
            <header class="mastheadDestino" id="peru"></header>
            <section id="about" class="about-section text-center">
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">A equipe da OliverTur deseja Boas Vindas!</h2>
                    <p class="text-white-50">Temos a disposição diversos destinos turísticos com uma grande variedade de atrativos, programações e passeios. Os principais destinos são o Pantanal Sul, Bolívia e Peru. Trabalhamos com o Turismo Personalizado, organizamos a sua viagem de acordo com seu perfil, tempo e orçamento disponível. Encontre o destino ideal para sua tão sonhada viagem! </p>
                    </div>
                </div>
                <img src="img/ipad.png" class="img-fluid" alt="">
                </div>
            </section>

            <!-- Projects Section -->
            <section id="projects" class="projects-section bg-light">
                <div class="container">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                    <img class="img-fluid" src="https://olvrtur.files.wordpress.com/2019/08/16265191_201476153660524_1764860663924253223_n.jpg" alt="" style="min-height:100%;">
                    </div>
                    <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Pantanal Sul</h4>
                            <p class="mb-0 text-white-50">O Pantanal Sul possui uma imensa diversidade na fauna e flora. Existem na região 1.132 espécies de borboletas, 656 de aves, 122 de mamíferos, 263 de peixes e 93 de répteis. Existem diversas atrações e programações que é possivel realizar nesses destinos, como pesca, trilhas, passeios e safáris fotográficos, mergulho, observação de aves, dia de peão e hospedagem em fazendas.</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>


                

                <!-- Project One Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                    <img class="img-fluid" src="https://olvrtur.files.wordpress.com/2019/08/city-tour-santa-cruz-church.jpg?w=1000&h=" alt="" style="min-height:100%;">
                    </div>
                    <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Bolívia</h4>
                            <p class="mb-0 text-white-50">A OliverTur conta com diversos destinos e passeios no nosso país vizinho, desde a região da chiquitania, onde é possivel encontrar cidades maravilhosas, igrejas construidas por jesuitas no século XVII e recantos naturais apaixonantes, até a região do altos onde há ruinas de povos pré-colombianos, deserto de sal e o lago mais altos do mundo. Aventure-se por esses destinos com a OliverTur.</p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Project Two Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                    <img class="img-fluid" src="https://olvrtur.files.wordpress.com/2019/08/750_2017626123854857-1.jpg" alt="" style="min-height:100%;">
                    </div>
                    <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Peru</h4>
                            <p class="mb-0 text-white-50">O Peru é um país da América do Sul que abriga uma parte da Floresta Amazônica e Machu Picchu, uma antiga cidade inca na cordilheira dos Andes. A região ao redor de Machu Picchu, que abrange o Vale Sagrado dos Incas, o Camino Inca e a cidade colonial de Cusco, é rica em sítios arqueológicos. </p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                </div>
            </section>

            @include('layouts.footer')
        </main>
    </div>
</body>
</html>
