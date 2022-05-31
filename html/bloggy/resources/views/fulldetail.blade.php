@extends('layouts.app')

@section('content')

        <section class="tm-section">

                <div class="container">

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                        <div class="tm-blog-post">
                            <h4 class="tm-gold-text">{{$blog->postTitle}}</h4>
                            <h3>{{$blog->postSummary}}</h3>
                            <img src="{{asset($blog->postPhoto)}}" alt="Image" class="h-75 w-100">

                            <h2>{{$blog->postDescription}}</h2>


                        </div>

                    </div>


                </div>

            </div>
        </section>

<section class="tm-section">

    <div class=" tm-margin-t-big">

        <div class="container-flex row tm-margin-t-big">

          @foreach($posts as $post)
            <div class="tm-content-box tm-margin-b-30 tm-margin-t-big col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xl-3">

                <div class="container-fluid row  w-75 p-3 h-100 ">
                    <img src="{{asset($post->postPhoto)}}" alt="Image" class="h-50">
                    <h4 class="tm-margin-b-10 tm-gold-text">{{$post->postTitle}}</h4>
                    <h5 class="tm-margin-b-10 tm-gray-text">{{$post->writer->name}}</h5>
                    <p class="tm-margin-b-5">{{$post->postSummary}}</p>
                  <h2>  <a href="{{route('detail', ['id' => $post->id])}}" class="tm-btn btn btn-outline-warning">Detail</a></h2>
                </div>


            </div>
            @endforeach


</div>

    </div>

  </section>

@endsection
