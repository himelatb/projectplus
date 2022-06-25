
@extends('layouts.app')
@section('content')

<div class="container" style="margin-left: 60px; margin-bottom: 50px;">

  <form style="margin-bottom: 50px; margin-top: 50px;" action="{{route('update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
    @csrf
  <h4 class="tm tm-gray-text">Edit</h4>
<input style="margin-bottom: 10px; margin-top: 10px;" type="text" name="title" class="form-control" value="{{$post->postTitle}}">
<input style="margin-bottom: 10px; margin-top: 10px;" type="text" name="summary" class="form-control" value="{{$post->postSummary}}">
<textarea style="padding-bottom: 200px; margin-top: 10px;" type="text" name="description" class="form-control"  >{{$post->postDescription}}</textarea>
<input style="margin-bottom: 10px; margin-top: 10px;" type="file" class="form-control"  name="image">
<div style="margin-bottom: 60px; margin-top: 10px;" class="form-footer">
  <button type="submit" class="btn btn-outline-success">Save</button>
</div>
</form>

</div>


@endsection
