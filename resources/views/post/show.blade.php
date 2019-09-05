@include('layouts.head')
<div class="container">
    <div class="row">
      <!-- Post Content Column -->
        <div class="col-lg-8 card">
            @include('blog.titulo')
            @include('blog.carrossel')
            <hr>
            <!-- Post Content -->
            <p align="justify" class="lead">{{$post->texto}}</p>
           
        </div>
        @include('blog.sidebar')
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@include('layouts.footer')