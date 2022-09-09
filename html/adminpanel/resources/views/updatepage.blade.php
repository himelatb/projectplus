@extends('layouts.app')
@section('content')

<div class="container-login100">
  <div class="">
    <div class="modal-body wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" >
        <form class="form-control" action="{{route('update', ['id' => $studentdata->id])}}" method="post">
          @csrf
          <p class="login100-form-title p-b-20">Update Student</p>
          <span class="label-input100">Name</span>
          @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
          <input class="form-control wrap-input100 validate-input m-b-23" type="text" name="name" value="{{$studentdata -> student_name ?? ''}}" placeholder="write name">
          <span class="label-input100">Roll</span>
          @if ($errors->has('roll'))
              <span class="text-danger">{{ $errors->first('roll') }}</span>
          @endif
          <input class="form-control wrap-input100 validate-input m-b-23" type="text" name="roll" value="{{$studentdata -> roll ?? ''}}" placeholder="write roll">
          <span class="label-input100">Class</span>
          @if ($errors->has('class'))
              <span class="text-danger">{{ $errors->first('class') }}</span>
          @endif
            <select class="form-select form-control class wrap-input100 validate-input m-b-23" name="class"  aria-label="Default select example">

              <option selected>{{$studentdata->class_name ?? ''}} </option>
              @foreach($classes as $class)
              <option >{{$class -> class_name}}</option>
              @endforeach
            </select>

            <span class="label-input100">Section</span>
            @if ($errors->has('section'))
                <span class="text-danger">{{ $errors->first('section') }}</span>
            @endif
            <select class="form-select form-control wrap-input100 validate-input m-b-23" name="section" aria-label="Default select example">

              <option selected>{{$studentdata->section_name ?? ''}}</option>
              @foreach($sections as $section)
              <option >{{$section->section_name}}</option>
              @endforeach
            </select>

            <span class="label-input100">Group</span>
            @if ($errors->has('group'))
                <span class="text-danger">{{ $errors->first('group') }}</span>
            @endif
            <select class="form-select form-control group wrap-input100 validate-input m-b-23" name="group" aria-label="Default select example">

              <option selected>{{$studentdata->group_name  ?? '' }}</option>
              @foreach($groups as $group)
              <option >{{$group -> group_name}}</option>
              @endforeach
            </select>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-success" href="#">Save</button>
              <a type="button" class="btn btn-outline-danger" href="{{route('home')}}">Close</a>
            </div>
        </form>

        </div>
      </div>
      </div>
@endsection
