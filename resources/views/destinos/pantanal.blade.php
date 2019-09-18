<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
    <div id="app">
        <main>
            @include('layouts.nav')
            <header class="mastheadDestino" id="pantanal"></header>
            <section id="about" class="about-section text-center">
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Conheça o Pantanal Sul Matogrossense!</h2>
                    <p class="text-white-50">O Pantanal Sul possui uma imensa diversidade na fauna e flora. Existem na região 1.132 espécies de borboletas, 656 de aves, 122 de mamíferos, 263 de peixes e 93 de répteis. Existem diversas atrações e programações que é possivel realizar nesses destinos, como pesca, trilhas, passeios e safáris fotográficos, mergulho, observação de aves, dia de peão e hospedagem em fazendas. Os principais destinos do Pantanal Sul Matogrossense que a OliverTur oferece seus serviços são Corumbá, Bonito e Miranda.</p>
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
                    <img class="img-fluid" src="/BonitoDestinos.jpg" alt="" style="min-height:100%;">
                    </div>
                    <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Bonito</h4>
                            <p class="mb-0 text-white-50">Um vale, com águas cristalinas, verde exuberante e fauna riquíssima. Isso é Bonito, uma cidade do Mato Grosso do Sul com uma das paisagens mais exuberantes do Brasil, sendo considerado um dos destinos mais procurados para o ecoturismo de todo mundo. A Gruta do Lago Azul e a Gruta de São Miguel são as cavernas abertas à visitação. Deslumbrantes, cada uma de sua maneira. Há atrações para todos os gostos, desde a contemplação da fauna e flora, passando pela flutuação e mergulho, até os esportes radicais, ou, simplesmente ficar para relaxar.</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>


                

                <!-- Project One Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                    <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/4/44/Corumb_1_galleryfull.jpg" alt="" style="min-height:100%;">
                    </div>
                    <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Corumbá</h4>
                            <p class="mb-0 text-white-50">É a maior e mais bem estruturada cidade do Pantanal. Banhada pelo rio Paraguai, tem museus e casario bem-preservado, é ponto de partida de barcos-hotel.  A Cidade Branca como é conhecida tem 241 anos, já foi palco de guerra entre Brasil e Paraguay no século XIX, também  no fim do século XIX, o porto fluvial de Corumbá era o terceiro maior da América Latina. Corumbá conta com diversas atrações turísticas que vão de cultural, histórico, ecoturismo, pesca esportiva, até compras de artesanato e artigos importados no livre comércio na Bolívia, enfim, é uma parte do Brasil rica em belezas naturais, em harmonia entre a natureza e o homem pantaneiro. </p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Project Two Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                    <img class="img-fluid" src="http://bonitonet.com.br/admin/files/73273/cavalgada%20pantanal.jpg" alt="" style="min-height:100%;">
                    </div>
                    <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Pantanal</h4>
                            <p class="mb-0 text-white-50"> e tem a estrada- Parque, cheia de hotéis para ecoturismo, um dos melhores locais para avistar animais no Pantanal. O Peru é um país da América do Sul que abriga uma parte da Floresta Amazônica e Machu Picchu, uma antiga cidade inca na cordilheira dos Andes. A região ao redor de Machu Picchu, que abrange o Vale Sagrado dos Incas, o Camino Inca e a cidade colonial de Cusco, é rica em sítios arqueológicos. </p>
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
