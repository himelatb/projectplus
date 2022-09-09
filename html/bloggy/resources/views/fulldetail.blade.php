@extends('layouts.app')

@section('content')

        <section class="tm-section" style="padding-bottom: 1px;">

                <div class="container" style="padding-bottom: 1px;">

                    <div class="">
                        <div class="tm-blog-post">
                            <h4 class="tm-gold-text">{{$blog->postTitle}}</h4>
                            <h3>{{$blog->postSummary}}</h3>
                            <img src="{{asset($blog->postPhoto)}}" alt="Image not found" style="border-bottom-style: solid;padding-left: 140px;border-bottom-width: 0px;margin-top: 20px;margin-bottom: 20px;" class="col-xl-10">

                            <h2 style="text-align:justify">{{$blog->postDescription}}</h2>


                        </div>

                    </div>


                </div>

            </div>
        </section>

<section class="tm-section" style="padding-bottom: 1px;">

    <div class=" tm-margin-t-sm" >

        <div class="container-flex row tm-margin-t-big">

          @foreach($posts as $post)
            <div class="tm-content-box tm-margin-b-10 tm-margin-t-big col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xl-3">

                <div class="container-fluid row  w-80 p-3 h-100 ">
                    <img src="{{asset($post->postPhoto)}}" alt="Image" class="h-50">
                    <h4 style="margin-bottom: 0px" class="tm-margin-b-10 tm-gold-text">{{$post->postTitle}}</h4>
                    <h5 style="margin-bottom: 0px" class="tm-gray-text">{{$post->writer->name}}</h5>
                    <h3 style="margin-bottom: 0px">{{$post->postSummary}}</h3>
                  <h2>  <a style="padding-left: 50px;padding-right: 50px;margin-right: 100px;margin-left: 55px; color: black;" href="{{route('detail', ['id' => $post->id])}}" class="tm-btn btn btn-outline-warning">Detail</a></h2>
                </div>


            </div>
            @endforeach


</div>

    </div>

  </section>

@endsection
