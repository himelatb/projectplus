@extends('layouts.app')

@section('content')

<div class="container" style="margin-left: 60px;">
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

            <div class="container" >

            </div>
            <div class="dropdown show">


            <div class="container-flex row tm-margin-t-big">
              @foreach($posts as $post)

                <div class="tm-content-box tm-margin-b-20 margin-33 tm-margin-l-big col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xl-3">
                    <div class="container-flex row  w-60  h-100 ">
                      <div class="nav-item ">
                          <a id="navbarDropdown" class="float-end text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                          </a>


                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"   >
                              <a class="dropdown-item " href="{{route('edit', ['id'=>$post->id])}}">
                                  {{ __('Edit') }}
                              </a>

                              <a class="dropdown-item" href="{{route('delete', ['id'=>$post->id])}}">
                                {{__('Delete')}}
                              </a>
                          </div>
                      </div>
                        <img src="{{asset($post->postPhoto)}}" alt="Image not found" class="h-50 ">
                        <h4 style="margin-bottom: 0px;" class="tm-margin-b-10 tm-gold-text">{{$post->postTitle}}</h4>
                        <h3 style="margin-bottom: 0px;"  class="tm-margin-b-5">{{$post->postSummary}}</h3>
                      <h3>  <a style="padding-left: 50px;padding-right: 50px;margin-right: 100px;margin-left: 55px; color: black;" href="{{route('detail', ['id'=>$post->id])}}" class="tm-btn btn  btn-outline-warning">Detail</a></h3>
                    </div>


                </div>
                @endforeach


    </div>


            <div class="row tm-margin-t-big">
            </div>
        </div>
      </section>
</div>
@endsection
