@extends('layouts.app')
@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('home')}}">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">

    <div class="form-inline my-2 my-lg-0">
      <form class="" action="" method="get">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" value="{{$search}}" name="search" id="search">
        <button class="btn btn-outline-success">search</button>
      </form>

    </div>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" type="button" data-toggle="modal" data-target="#exampleModal" href="{{route('add')}}">Add Student</a>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-control" action="{{route('add')}}" method="post">
        @csrf
        <span class="label-input100">Name</span>
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
        <input class="form-control" type="text" name="name" value="" placeholder="write full name">
        <span class="label-input100">roll</span>
        @if ($errors->has('roll'))
            <span class="text-danger">{{ $errors->first('roll') }}</span>
        @endif
        <input class="form-control" type="text" name="roll" value="" placeholder="write roll number">
        <span class="label-input100">Class</span>
        @if ($errors->has('class'))
            <span class="text-danger">{{ $errors->first('class') }}</span>
        @endif
          <select class="form-select form-control class" name="class" aria-label="Default select example">
            <option  disabled selected>select class</option>
            @foreach($classes as $class)
            <option >{{$class -> class_name}}</option>
            @endforeach
          </select>
          <span class="label-input100">Section</span>
          @if ($errors->has('section'))
              <span class="text-danger">{{ $errors->first('section') }}</span>
          @endif
          <select class="form-select form-control" name="section" aria-label="Default select example">

            <option disabled selected>select section</option>
            @foreach($sections as $section)
            <option >{{$section -> section_name}}</option>
            @endforeach
          </select>
          <span class="label-input100">Group</span>
          @if ($errors->has('group'))
              <span class="text-danger">{{ $errors->first('group') }}</span>
          @endif
          <select class="form-select form-control group" name="group" aria-label="Default select example">
            <option disabled selected >select group</option>
            @foreach($groups as $group)
            <option >{{$group -> group_name}}</option>
            @endforeach
          </select>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>

      </form>

      </div>
  </div>
  </div>
</div>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div >
  <table style="font-size:1.5rem;" class="table table-responsive-sm table-hover table-lg table-light table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">roll</th>
        <th scope="col">Name</th>
        <th scope="col">Class</th>
        <th scope="col">Group</th>
        <th scope="col">Section</th>
        <th scope="col">Created by</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody id="content"></tbody>

    <tbody class="" id="alldata">
      @foreach($students as $student)
      <tr>
        <th scope="row">{{$student->roll}}</th>
        <td>{{$student->student_name}}</td>
        <td class="class">{{$student->class_name}}</td>
        <td class="group">{{$student->group_name}}</td>
        <td>{{$student->section_name}}</td>
        <td>{{$student->user_name}}</td>
        <td>{{$student->created_at}}</td>
        <td>{{$student->updated_at}}</td>
        <td>
          <a type="button" class="btn border  btn-outline-primary" href="{{route('update', ['id' => $student->id])}}">Update</a>
              <a type="button" class="btn border  btn-outline-danger" href="{{route('delete', ['id' => $student->id])}}">Delete</a>
            </td>
          </tr>
   @endforeach
        </tbody>
      </table>
    </div>

    @endsection
