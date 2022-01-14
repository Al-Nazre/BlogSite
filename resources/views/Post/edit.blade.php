@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card m-3">
        <div class="card-header">
          <h4 class="text-center"> Update post</h4>
        </div>
    <div class="card-body">
        <form action="update-post/{{$post->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Title</label>
                    <input type="text" value = "{{$post->title}}" class="form-control" name="title">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" value = "{{$post->slug}}" class="form-control" name="slug">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="body">Body</label>
                    <textarea name="body" rows="3"  class="form-control">{{$post->body}}</textarea>
                </div>
                @if($post->image)
                <img class="ml-3" src="storage/uploads/{{$post->image}}" height="150" width="auto"  alt="Post Image">
                @endif
                
                <div class="col-md-12">
                    <label for="">Upload Image:</label>
                    <input type="file"  name="image" class="form-control">
                </div>
                
                <div class="col-md-12 m-3"> 
                    <center>
                        <button type="submit" class="btn btn-primary text-center">Submit</button>
                    </center>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

    </div>
@endsection