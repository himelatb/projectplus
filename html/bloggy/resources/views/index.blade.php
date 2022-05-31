@extends('layouts.app')

@section('content')


<section class="tm-section">

    <div class=" tm-margin-t-big">

        <div class="row tm-margin-t-big">

        </div>
        <div class="container-fluid row tm-margin-t-big">
          @foreach($posts as $post)
          @foreach($post->content as $contents)
            <div class="tm-content-box tm-margin-b-30 tm-margin-t-big col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xl-3">

                <div class="row  w-75 p-3 h-100 ">
                    <img src="{{asset($contents->postPhoto)}}" alt="Image" class=" h-50">
                    <h4 class="tm-margin-b-10 tm-gold-text">{{$contents->postTitle}}</h4>
                    <h5 class="tm-margin-b-10 tm-gray-text">{{$post->name}}</h5>
                    <h3 class="tm-margin-b-5">{{$contents->postSummary}}</h3>
                  <h3>  <a href="{{route('detail', ['id' => $contents->id])}}" class="tm-btn btn btn-outline-warning ">Detail</a></h3>
                </div>


            </div>
            @endforeach
            @endforeach

</div>

        <div class="row tm-margin-t-big">



        </div> <!-- row -->

    </div>

  </section>

@endsection
