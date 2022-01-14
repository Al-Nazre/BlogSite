@guest
<section class="navigation shadow-lg">
  <div class="nav-container">
    <div class="brand">
      <a href="/">Blog Site</a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="navbar-toggle"><span class="text-dark"></span></a></div>
      <center>
        <ul class="nav-list">
            <li>
            <a  href="/">Home</a>
            </li>
            <li>
            <a href="login">Login</a>
            </li>
            <li>
            <a href="register">Register</a>
            </li>
        </ul>
    </center>
    </nav>
  </div>
</section>
@else
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="home">Blog Site</a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="navbar-toggle"><span class="text-dark"></span></a></div>
      <center>
        <ul class="nav-list">
            <li>
            <a  href="home">Home</a>
            </li>
            <li>
            <a href="post-create">Add Post</a>
            </li>
            <li>
            <a href="post">My Posts</a>
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
