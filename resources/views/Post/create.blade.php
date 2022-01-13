@extends('layouts.master')

@section('content')
    <div class="container"
        <div class="card">
        <div class="card-header">
          <h4> Add post</h4>
        </div>
    <div class="card-body">
        <form action="post-store" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="body">Body</label>
                    <textarea name="body" rows="3" class="form-control"></textarea>
                </div>
                
                
                <div class="col-md-12">
                    <input type="file" name="image" class="form-control">
                </div>
                
                <div class="col-md-12"> 
                    <button type="submit" class="Ebtn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

    </div>
@endsection