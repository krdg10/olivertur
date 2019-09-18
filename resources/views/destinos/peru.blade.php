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
                    <h2 class="text-white mb-4">Visite o Peru!</h2>
                    <p class="text-white-50"> O Peru é um país da América do Sul que abriga uma parte da Floresta Amazônica e Machu Picchu, uma antiga cidade inca na cordilheira dos Andes. A região ao redor de Machu Picchu, que abrange o Vale Sagrado dos Incas, o Camino Inca e a cidade colonial de Cusco, é rica em sítios arqueológicos. </p>
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
                    <img class="img-fluid" src="/Machu.jpg" alt="" style="min-height:100%;">
                    </div>
                    <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Machu Picchu</h4>
                            <p class="mb-0 text-white-50"> Machu Picchu, ou a “Velha Montanha” como era chamada pelos antigos povoados andinos Incas, foi construida principalmente de pedra durante o século XV. Localizada no sul do Peru nas montanhas rochosas que ligam Machu Picchu e Huayna Picchu nas encontas orientais dos Andes Centrais. De acordo com os documentos Machu Picchu foi uma das casas de descanso de Pachacútec (primeiro imperador Inca, 1438-1470). É evidente o caráter cerimonial da principal rota de acesso a Llaqta, acredita-se que ela foi usada como um santuário. Machu Picchu é considerada uma obra prima da arquitetura e engenharia.</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>


                

                <!-- Project One Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                    <img class="img-fluid" src="/CuscoPeru.jpg" alt="" style="min-height:100%;">
                    </div>
                    <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Cusco</h4>
                            <p class="mb-0 text-white-50">A cidade de Cusco está localizada no vale do rio Watanay a 3.600 metros acima do nível do mar e tem cerca de 420 mil habitantes. Foi fundada pelo inca Manko Cápac, entre os séculos XI e XII DC. Seu nome provem da palavra “Kosko” que significa “ombligo” (umbigo) ou centro de Tiwuantinsuyo. Com mais de 3000 anos é considerada a cidade mais antiga da América e conta com diversos atrativos turisticos como: Museu de Qorikancha, Saqsaywaman, Pukapukara, Tambomachay, Pisac e muitos outros.</p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
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
