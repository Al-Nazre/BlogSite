@extends('layouts.master')
@section ('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
              
                <h2>Post of {{$post->slug}}</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="blog-posts mb-3 grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
            <div class="card p-3">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('storage/uploads/'.$post->image)}}" alt="" width="100%" height="auto">
                    </div>
                    <div class="col-md-6">
                      <a href="{{url('post/'.$post->slug)}}"><h4>{{$post->title}}</h4></a>
                      <a href="{{url('post/'.$post->slug)}}"><h5 class="font-weight-bold text-warning">{{$post->slug}}</h5></a>
                      <p >{{$post->body}}</p>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
