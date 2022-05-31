@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <section class="tm-section">


        <div class="">

            <div class="container">

            </div>
            <div class="container-flex row tm-margin-t-big">
              @foreach($posts as $post)
                <div class="tm-content-box tm-margin-b-30 tm-margin-t-big col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xl-3">

                    <div class="container-fluid row  w-75 p-3 h-100 ">
                        <img src="{{asset($post->postPhoto)}}" alt="Image" class="h-50">
                        <h4 class="tm-margin-b-10 tm-gold-text">{{$post->postTitle}}</h4>
                        <h3 class="tm-margin-b-5">{{$post->postSummary}}</h3>
                      <h3>  <a href="{{route('detail', ['id'=>$post->id])}}" class="tm-btn btn  btn-outline-warning">Detail</a></h3>
                    </div>


                </div>
                @endforeach

    </div>

            <div class="row tm-margin-t-big">



            </div> <!-- row -->

        </div>

      </section>
</div>
@endsection
