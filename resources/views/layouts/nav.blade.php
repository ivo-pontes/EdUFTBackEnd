<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="/posts">Home</a>
          <a class="blog-nav-item" href="/login">Login</a>
          <a class="blog-nav-item" href="/register">Register</a>
          @if(Auth::check())
            <a class="blog-nav-item" style="float: right;" href="/logout"> Logout</a>
            <a class="blog-nav-item" style="float: right;" href="#"> {{ Auth::user()->name }}</a>
          @endif
        </nav>
      </div>
    </div>
