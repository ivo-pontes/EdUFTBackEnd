<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="/">Home</a>
          <a class="blog-nav-item" href="/login">Login</a>
          <a class="blog-nav-item" href="/register">Register</a>
          <a class="blog-nav-item" href="/autores/create">Registrar Autor</a>
          <a class="blog-nav-item" href="/livros/create">Registrar Livro</a>
          @if(Auth::check())
            <a class="blog-nav-item" style="float: right;" href="/logout"> Logout</a>
            <a class="blog-nav-item" style="float: right;" href="#"> {{ Auth::user()->name }}</a>
          @endif
        </nav>
      </div>
    </div>
