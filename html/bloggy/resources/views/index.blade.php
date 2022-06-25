@extends('layouts.app')

@section('content')


<section class="tm-section">

    <div class=" tm-margin-t-big">

        <div class="row tm-margin-t-big">

        </div>
        <div class="container-fluid row tm-margin-t-big">
          @foreach($posts as $post)
          @foreach($post->content as $contents)
            <div class="tm-content-box tm-margin-b-20 tm-margin-t-big col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xl-3">

                <div class="row w-60 h-100 ">
                    <img src="{{asset($contents->postPhoto)}}" alt="Image" class=" h-50">
                    <h4 style="margin-bottom: 0px;" class="tm-gold-text">{{$contents->postTitle}}</h4>
                    <h5 style="margin-bottom: 0px;" class=" tm-gray-text">{{$post->name}}</h5>
                    <h3 style="margin-bottom: 0px;" class="">{{$contents->postSummary}}</h3>
                  <h3 class="" >  <a style="padding-left: 50px;padding-right: 50px;margin-right: 100px;margin-left: 55px; color: black;" href="{{route('detail', ['id' => $contents->id])}}" class="tm-btn btn btn-outline-warning">Detail</a></h3>
                </div>


            </div>
            @endforeach
            @endforeach

</div>


    </div>

  </section>

@endsection
