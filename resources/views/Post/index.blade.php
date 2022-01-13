@extends('layouts.master')

@section('content')
<div class="container">
  <h3 class="text-center m-3">List of all posts</h3>
  @foreach($posts as $item)
  <div class="m-3">
    <div class="p-3 card rounded ">
      <div class="row mb-3">
        <div class="col-md-3 col-12">
          <img class="img-post" src="uploads/{{$item->image}}" alt="Image" name="image">
        </div>
        <div class="col-md-9 col-12 text-center">
          <h5>{{$item->title}}</h5>
          <small>{{$item->body}}</small>
        </div>
      </div>
      <center>
        <button class="btn btn-warning" data-toggle="modal" data-target="#EditModal2">EDIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal2">DELETE</button>
      </center>
    </div>
  </div>
  @endforeach 
</div>

@endsection
