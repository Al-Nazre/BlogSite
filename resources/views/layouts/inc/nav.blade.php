@guest
<section class="navigation shadow-lg">
  <div class="nav-container">
    <div class="brand">
      <a href="{{url('/')}}">Blog Site</a>
    </div>
    <nav class="nav">
      <div class="nav-mobile"><a id="navbar-toggle"><span class="text-dark"></span></a></div>
      <center>
        <ul class="nav-list">
            <li>
            <a  href="{{url('/')}}">Home</a>
            </li>
            <li>
            <a href="{{url('login')}}">Login</a>
            </li>
            <li>
            <a href="{{url('register')}}">Register</a>
            </li>
        </ul>
    </center>
    </nav>
  </div>
</section>
@else
<section class="navigation bg-dark">
  <div class="nav-container">
    <div class="brand">
      <a href="{{url('/')}}">Blog Site</a>
    </div>
    <nav class="nav">
      <div class="nav-mobile"><a id="navbar-toggle"><span class="text-dark"></span></a></div>
      <center>
        <ul class="nav-list">
            <li>
            <a  href="{{url('/')}}">Home</a>
            </li>
            <li>
            <a href="{{url('post-create')}}">Add Post</a>
            </li>
            <li>
            <a href="{{url('post')}}">My Posts</a>
            </li>
            <li>
            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </li>
        </ul>
    </center>
    </nav>
  </div>
</section>
@endguest
