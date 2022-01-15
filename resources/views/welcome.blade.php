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
                <h4>Recent Posts</h4>
                <h2>Our Recent Blog Entries</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{asset('storage/uploads/'.$post->image)}}" height="100%" width="auto" alt="">
                    </div>
                    <div class="down-content">
                      <a href="{{url('post/'.$post->slug)}}"><span>{{$post->slug}}</span></a>
                      <a href="{{url('post/'.$post->slug)}}"><h4>{{$post->title}}</h4></a>
                      <p >{{$post->body}}</p>
                    </div>
                  </div>
                </div>
                @endforeach     
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <center>
      <div class="wrapper">
        <span>
            {{$posts->links()}}
        </span>
      </div>
    </center><br><br><br>
  

@endsection
