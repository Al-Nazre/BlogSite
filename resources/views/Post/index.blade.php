@extends('layouts.master')

@section('content')
<div class="container">
  <h3 class="text-center m-3">{{$user->name}}'s Posts</h3>
  @foreach($posts as $item)
  <div class="m-3">
    <div class="p-3 card rounded ">
      <div class="row mb-3">
        <div class="col-md-3 col-12">
          <img class="img-post" src="storage/uploads/{{$item->image}}" alt="Image" name="image">
        </div>
        <div class="col-md-9 col-12 text-center">
          <h5>{{$item->title}}</h5>
          <small>{{$item->body}}</small>
        </div>
      </div>
      <center>
        
        <a href="{{url('edit-post-'.$item->id)}}" class ="text-light"><button class="btn btn-warning" >EDIT</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{url('delete-post/'.$item->id)}}" class="btn btn-danger" >DELETE</a>
      </center>
    </div>
  </div>
  @endforeach 
</div>
 <center>
      <div class="wrapper">
        <span>
            {{$posts->links()}}
        </span>
      </div>
    </center><br><br><br>

@endsection
