@include('layouts.head')
@include('layouts.header_mini')
<div class="container card" id="containerPacote">
    <div class="row">
      <!-- Post Content Column -->
        <div class="col-12 col-sm-12 col-md-5 col-lg-6"> 
            <h2>Sobre Nós</h2>
                <div class="row">
                    <div class="col">
                       texto
                    </div>
                    
                </div>
                
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-6">
            <div id="slidePacote" class="carousel slide" data-ride="carousel">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                       <div class="carousel-item active">
                            <img class="img-fluid rounded" style="height: 300px; width: 900px;" src="#" alt="alt">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid rounded" style="height: 300px; width: 900px;" src="#" alt="alt">
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
    
    <div class="tab-content">
        <h2>Equipe</h2>
        texto
    </div>
</div>
@include('layouts.footer')