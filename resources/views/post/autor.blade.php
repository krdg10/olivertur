@include('layouts.head')
<div class="container">
    <div class="row">
        <!-- Post Content Column -->
        @foreach ($posts as $post)
            <div class="card col-lg-8">
                @include('blog.titulo')
                @include('blog.carrossel')
                <hr>
                <!-- Post Content -->
                <p align="justify" class="lead">{{$post->previa}}</p>
            </div>
            @if($flag==0)
                @include('blog.sidebar')
                @php $flag=1; @endphp
            @endif
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@include('layouts.footer')