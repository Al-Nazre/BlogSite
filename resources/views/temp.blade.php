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
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="storage/uploads/{{$post->image}}" alt="">
                    </div>
                    <div class="down-content">
                      <span>{{$post->slug}}</span>
                      <a href="post-details.html"><h4>{{$post->title}}</h4></a>
                      <p>{{$post->body}}</p>
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

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam impedit excepturi rem dicta cumque laudantium beatae officia, ratione distinctio eius doloremque minus ad consequatur. Minima tempore libero perferendis dignissimos nam nostrum ex qui porro soluta reiciendis illo inventore alias, unde doloribus corrupti vel temporibus saepe harum officiis amet dicta enim voluptate. Nisi alias sit ab quas, amet error, hic dolorum, provident laborum perferendis necessitatibus. Illum perferendis itaque, necessitatibus cupiditate rem optio quod. Molestias veritatis vel non beatae. Tenetur eligendi, expedita delectus accusantium veritatis inventore placeat maiores corporis eum illum perspiciatis quibusdam mollitia quis, dolores facere dolorum deleniti iure esse accusamus? Quibusdam exercitationem maiores molestiae consequuntur. Vitae, neque accusantium aut repellendus cum a minima eligendi et animi totam sapiente autem eaque soluta nesciunt magnam ducimus facere voluptatibus fugit dignissimos quia fuga architecto corporis. Sapiente assumenda rerum doloremque quis rem culpa ex harum voluptas officiis consequatur repudiandae eveniet vero sit enim unde, quam, nulla excepturi commodi voluptatum explicabo minus tenetur quibusdam distinctio temporibus! Eligendi labore voluptate maiores delectus totam provident cumque ratione, fuga iure? Eos veniam consectetur aliquid illum? Eum eligendi incidunt libero quia neque dolore placeat dolorum velit voluptates ut ipsam in a consequatur ad, qui repellat! Explicabo officia sequi cumque sunt debitis molestias similique quod corporis assumenda perspiciatis! Ex similique sed possimus excepturi, quo autem in magni et consequuntur necessitatibus culpa ullam molestiae distinctio quisquam neque quaerat velit animi aliquid pariatur saepe iure temporibus dignissimos dolorum! Distinctio, eligendi optio error quo iusto officia vero repellat neque cum, maiores facere, similique a recusandae doloribus dolores aut veritatis et quos? Impedit, eius? Officia excepturi enim doloremque libero vitae perspiciatis dignissimos suscipit minima incidunt at, pariatur ad ut iusto esse in eum provident dolorum? Magnam architecto expedita, itaque tenetur quam facilis nemo! Tenetur, ad molestias cupiditate fugit maxime assumenda facilis eum enim officiis.</p>
@endsection
